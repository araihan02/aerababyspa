<?php
class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('models', '', TRUE);
        $this->load->helper('cookie');
        // $this->Models->queryhandle("SET ANSI_NULLS ON;");
        // $this->Models->queryhandle("SET ANSI_WARNINGS ON;");
        ini_set('max_execution_time', 0);
    }


    function ceklogin()
    {
        $this->Models->queryhandle("DELETE FROM loginlog WHERE expiredtime < NOW()");
        $this->Models->queryhandle("UPDATE userlogin SET loginstatus = 0 WHERE username NOT IN(SELECT username FROM loginlog)");

        // $this->Models->queryhandle("UPDATE dbo.user_login_admin SET loginstatus = 0 
        // WHERE username COLLATE database_default NOT IN (SELECT username FROM dbo.WebLoginLog)");

        $username = $this->input->cookie('cookie_invent_user');
        $sesi = $this->input->cookie('cookie_invent_sesi');
        $jam = $this->Models->showsingle("SELECT NOW() AS skrg, DATE_ADD(NOW(), INTERVAL 3 HOUR) AS expired");
        // var_dump($username, $sesi);
        $datacekuser = $this->Models->showsingle("SELECT count(*) total FROM loginlog
                                                  WHERE username = '" . $username . "' AND sesi = '" . $sesi . "' ");
        if ($datacekuser->total < 1) {
            // delete_cookie('cookie_invent_user');
            // delete_cookie('cookie_invent_tipe');
            // var_dump('sinida');
            // die;
            $this->Models->queryhandle("UPDATE userlogin SET loginstatus = 0 WHERE username = '" . $username . "' ");
            // $this->Models->queryhandle("UPDATE dbo.user_login_admin SET loginstatus = 0 WHERE username = '" . $username . "' ");
            $this->Models->queryhandle("DELETE FROM loginlog WHERE username = '" . $username . "' ");

            // $this->session->set_flashdata('message-failed', 'You are not logged in !');
            redirect(base_url('Logout'));

            // die("<script language='JavaScript'>alert('You are not logged in !'); document.location='" . base_url() . "logout'</script>");
            // $this->session->set_flashdata('msgLoginUlang', 'Your time has expired, please re-login !');
            // redirect(base_url() . "logout", "Refresh");
        }

        $this->Models->queryhandle("UPDATE loginlog SET expiredtime = '" . $jam->expired . "' WHERE username = '" . $username . "' ");

        if ($username == NULL) {
            // $this->session->set_flashdata('message-failed', 'You are not logged in !');
            // var_dump('sinia');
            // die;
            redirect(base_url('Logout'));
            // die("<script language='JavaScript'>alert('You are not logged in !'); document.location='" . base_url() . "logout'</script>");
            // $this->session->set_flashdata('msgLoginUlang', 'Your time has expired, please re-login !');
            // redirect(base_url() . "logout", "Refresh");
        }

        $vCuser = $this->input->cookie('cookie_invent_user');
        $vCsesi = $this->input->cookie('cookie_invent_sesi');
        $vCtipe = $this->input->cookie('cookie_invent_tipe');

        $vcookie1 = array(
            'name'   => 'cookie_invent_user',
            'value'  => $vCuser,
            'expire' => '86400'
        );
        $this->input->set_cookie($vcookie1);

        $vcookie2 = array(
            'name'   => 'cookie_invent_sesi',
            'value'  => $vCsesi,
            'expire' => '86400'
        );
        $this->input->set_cookie($vcookie2);

        $vcookie3 = array(
            'name'   => 'cookie_invent_tipe',
            'value'  => $vCtipe,
            'expire' => '86400'
        );
        $this->input->set_cookie($vcookie3);
    }


    function menu_baru()
    {
        $type = $this->input->cookie('cookie_invent_tipe');
        $query = $this->db->query(" SELECT b.* FROM moduleaccess a
                                    INNER JOIN module b ON a.moduleid = b.moduleid
                                    WHERE b.flag = 1 AND usertype = '" . $type . "' ORDER BY moduleid ASC")->result();
        $i = 1;
        foreach ($query as $hasil) {
            $number_child = $this->db->query("SELECT * FROM module WHERE parent = " . $hasil->moduleid . "")->num_rows();
            $s = "";
            $arrow = "";
            $link = base_url() . $hasil->path;
            $hastag = "";
            $toggle = "";
            if (($hasil->path == $this->parent_url($this->uri->segment(1))) || ($hasil->path ==  $this->uri->segment(1))) {
                $s = "active";
            }

            if ($number_child > 0) {
                $link = "menu" . $i;
                $arrow = "<i class='menu-arrow'></i>";
                $hastag = "#";
                $toggle = "menu-toggle";
            }

            if ($hasil->parent == 0) {
                echo "<li class=' menu-item " . $s . "'>";
                echo "<a class='menu-link $toggle' href='" . $hastag . "" . $link . "' aria-expanded='false' aria-controls='" . $link . "'>
                    <i class='menu-icon tf-icons bx " . $hasil->icon . "'></i>
                    <div data-i18n=" . $hasil->modulename . ">" . $hasil->modulename . "</div>
                    $arrow
                </a>";

                $this->get_child($hasil->moduleid, $link);
                echo "</li>";
            }
            $i++;
        }
    }

    function get_child($kode, $link)
    {
        $type = $this->input->cookie('cookie_invent_tipe');
        $query = $this->db->query(" SELECT b.* FROM moduleaccess a
                                    INNER JOIN module b ON a.moduleid = b.moduleid 
                                    WHERE b.flag = 1 AND usertype = '" . $type . "' AND parent = '" . $kode . "' ORDER BY moduleid ASC");
        if ($query->num_rows() > 0) {

            echo "<ul class='menu-sub'>";
            foreach ($query->result() as $hsl) {
                $ss = "";
                if ($hsl->path ==  $this->uri->segment(1) . '/' . $this->uri->segment(2)) {
                    $ss = "active";
                }
                echo "<li class='menu-item " . $ss . "'> <a class='menu-link' href='" . base_url() . $hsl->path . "'> <div data-i18n=" . $hsl->modulename . ">" . $hsl->modulename . "</div></a></li>";
            }
            echo "</ul>";
        }
    }

    // function get_second_child($kode)
    // {
    //     $type = $this->input->cookie('cookie_invent_tipe');
    //     $query = $this->db->query(" SELECT b.* FROM dbo.MenuAccess a
    //                                 INNER JOIN dbo.Module b ON a.MenuID = b.MenuID 
    //                                 WHERE b.Flag = 1 AND UserType='" . $type . "' AND Parents = '" . $kode . "' ORDER BY ModuleName ASC");

    //     if ($query->num_rows() > 0) {
    //         echo "<ul class='submenu''>";
    //         foreach ($query->result() as $hsl) {
    //             $sss = "";
    //             if ($hsl->Path ==  $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $this->uri->segment(3)) {
    //                 $sss = "active";
    //             }
    //             echo "<li class = '" . $sss . "' >
    //             <a class='linknya' href='" . base_url() . $hsl->Path . "'> <i class='menu-icon fa fa-caret-right'></i> " . $hsl->ModuleName . "</a>
    //             <b class='arrow'></b>
    //             </li>";
    //         }
    //         echo "</ul>";
    //     }
    // }

    function parent_url($kode = '')
    {
        $query2 = $this->db->query("SELECT b.path AS PathParent FROM module a 
                                    LEFT JOIN module b on a.parent = b.moduleid  
                                    WHERE b.flag = 1 AND a.path = '" . $kode . "'");

        if ($query2->num_rows() > 0) {
            return $query2->row()->PathParent;
        } else {
            return false;
        }
    }


    function go_to($view, $data)
    {
        $user = $this->input->cookie('cookie_invent_user');
        $tipe = $this->input->cookie("cookie_invent_tipe");

        $data['tipe'] = $tipe;
        $data['user'] = $this->Models->showsingle("SELECT * FROM userlogin WHERE username ='" . $user . "'");

        // $data['jmlnotif'] = $this->Models->showdata("select a.*,b.fullname from Comments a inner join User_Login b on a.FromUsers=b.username where ToUsers='" . $user . "' and ReadStatus=0 order by CreatedDate asc");

        // $data['user_admin'] = $this->Models->showsingle("SELECT * FROM dbo.user_login_admin WHERE username ='" . $user . "'");

        $this->load->view('partial/header', $data);
        $this->load->view('partial/sidebar', $data);
        $this->load->view('partial/navbar', $data);
        $this->load->view($view, $data);
        $this->load->view('partial/footer', $data);
    }
    function go_to_auth($view, $data)
    {
        $user = $this->input->cookie('cookie_invent_user');
        $tipe = $this->input->cookie("cookie_invent_tipe");

        $data['user'] = $this->Models->showsingle("SELECT * FROM userlogin WHERE username ='" . $user . "'");

        // $data['user_admin'] = $this->Models->showsingle("SELECT * FROM dbo.user_login_admin WHERE username ='" . $user . "'");

        $this->load->view('auth/header', $data);
        $this->load->view($view, $data);
        $this->load->view('auth/footer', $data);
    }
}
