<div>
    <h3 style="margin-left: 30px"><?="Welcome Administrator ".$this->session->get("logged_in_user")?></h3>
    <ul>
        <li style="margin-left: 30px">
            <?="You currently have logged in ".$this->session->get("logs")." time(s)"?><br/><br/>
        </li>
        <li style="margin-left: 60px">
            <?=html::anchor("logout", "Logout")?>
        </li>
    </ul>
</div>