<?php
echo view('layout/v_head');
echo view('layout/v_nav');
if($isi){
	echo view($isi);
}
echo view('layout/v_foot');
?>