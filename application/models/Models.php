<?php
class Models extends CI_Model
{
    function showdata($sql)
    {
        $results = array();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    function showsingle($sql)
    {
        $query = $this->db->query($sql)->row();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    function queryhandle($query)
    {
        $this->db->query($query);
    }

    function createnoseries($serietype, $seriecode, $seriecategory, $location)
    {
        $nextno = 1;
        $date = new DateTime();
        $thbl = $date->format("ym");
        $sql = $this->db->query("SELECT nextno FROM noseriesetup
			WHERE serietype = '$serietype' AND seriecode = '$seriecode' 
			AND seriecategory = '$seriecategory' AND yearno = YEAR(NOW()) AND monthno = MONTH(NOW()) 
			AND location = '$location'");

        if ($sql->num_rows() > 0) {
            $nextno = $sql->row()->nextno;
        }

        if ($serietype = 'PRODUCT') {
            $notrans = $seriecode . '-' . $thbl . '-' . $seriecategory . '-' . $nextno;
        }
        if ($serietype = 'RESERVASI') {
            $notrans = $seriecode . '-' . $thbl . '-' . $nextno;
        }
        return $notrans;
    }

    function updatenoseries($serietype, $seriecode, $seriecategory, $location)
    {
        $sql = $this->db->query("SELECT nextno FROM noseriesetup
			WHERE serietype = '$serietype' AND seriecode = '$seriecode' 
			AND seriecategory = '$seriecategory' AND yearno = YEAR(NOW()) AND monthno = MONTH(NOW()) 
			AND location = '$location'");

        if ($sql->num_rows() > 0) {
            $this->db->query("UPDATE noseriesetup
		    SET nextno = nextno + 1
			WHERE serietype = '$serietype' AND seriecode = '$seriecode' 
			AND seriecategory = '$seriecategory' AND yearno = YEAR(NOW()) AND monthno = MONTH(NOW()) 
			AND location = '$location'");
        } else {
            $this->db->query("INSERT INTO noseriesetup (serietype, seriecode, seriecategory, yearno, monthno, nextno, createdby, createddate, location)
			VALUES ('$serietype', '$seriecode', '$seriecategory', YEAR(NOW()), MONTH(NOW()), 1, 'SYSTEM', NOW(), '$location')");
        }
    }
}
