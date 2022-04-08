<?php
include("Models/m_cont.php");
class c_cont
{
    public function cont()
    {
        $m_contact = new m_cont();
        $listContact = $m_contact->read_contact();
        $view = "Views/home/v_cont.php";
        include("Template/layout.php");
    }
}
