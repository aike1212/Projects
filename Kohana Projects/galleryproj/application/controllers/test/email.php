<?php defined('SYSPATH') OR die('No direct access allowed.');
    class Email_Controller extends Controller {

/**
 * Email practices using controllers so no need for templates.
 */

  public function mail() {
    $from = 'aike.chan.1212@gmail.com';
    $subject = 'Backup: ' . date("d/m/Y");
    $message = 'This is the <b>backup</b> for ' . date("d/m/Y");

    // Use connect() method to connect using the parameters set in the email config file
    $swift = email::connect();

    // Build recipient lists
    $recipients = new Swift_RecipientList;
    $recipients->addTo('aike_chan@yahoo.com');

    // Build the HTML message
    $message = new Swift_Message($subject, $message, TRUE);

    // Attachment
    $swiftfile = new Swift_File('/backups/dump-' . date("d-m-Y") . '.tar.gz');
    $attachment = new Swift_Message_Attachment($swiftfile);
    $message->attach($attachment);

    if ($swift->send($message, $recipients, $from))
    {
    // Success
    }
    else
    {
    // Failure
    }

    // Disconnect
    $swift->disconnect();
  }
}
