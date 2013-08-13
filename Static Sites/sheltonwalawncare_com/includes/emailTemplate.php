<?php $message = "
<table id=\"Email_Template\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"text-align:left;\">
    <tr><th width=\"120\"><strong>Name:</strong></th><td width=\"360\">".$_POST['NameTxt']."</td></tr>
    <tr><th><strong>Organization:</strong></th><td>".$_POST['OrganizationTxt']."</td></tr>
    <tr><th><strong>Address:</strong></th><td>".$_POST['AddressTxt']."</td></tr>
    <tr><th><strong>Town/City:</strong></th><td>".$_POST['CityTxt']."</td></tr>
    <tr><th><strong>Province/State:</strong></th><td>".$_POST['StateTxt']."</td></tr>
    <tr><th><strong>Postal/Zip Code:</strong></th><td>".$_POST['ZipTxt']."</td></tr>
    <tr><th><strong>Country:</strong></th><td>".$_POST['Country']."</td></tr>
    <tr><th><strong>Email Address:</strong></th><td>".$_POST['EmailTxt']."</td></tr>
    <tr><th><strong>Phone:</strong></th><td>".$_POST['PhoneNum']."</td></tr>
    <tr><th><strong>Fax:</strong></th><td>".$_POST['FaxNum']."</td></tr>
	<tr><th><strong>Best Time to Contact You:</strong></th><td>".$_POST['BestContactTime']."</td></tr>
	<tr><th><strong>When do you want to get started:</strong></th><td>".$_POST['WhenGetStarted']."</td></tr>
    <tr><th><strong>Subject:</strong></th><td>".$_POST['SubjectTxt']."</td></tr>
    <tr><th valign=\"top\"><strong>Please provide a short description about your project:</strong></th><td>".$_POST['MessageTxt']."</td></tr>
</table>";
?>