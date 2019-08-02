# MyGlobalData-Test
Fill a form, which will send an email containing the information provided.

## How to Run
Open `index.html` in a browser.

## How to Modify the Back-End
* Edit **`$email_to`** in `form_to_email.php` to your recipient email address.
* Run `form_to_email.php` on your own server.
  * Note: You need to configure SMTP to make sure your server can actually send out emails.
* Edit **`<form action="...">`** in `index.html` to the script path on your server.
