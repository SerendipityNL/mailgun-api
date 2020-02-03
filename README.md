# Mailgun-API
This is just a simple piece of software to test and demonstrate the Mailgun API.

To install clone this repository and run

    composer install

Make a copy of the .env.example with cp

    cp .env.example .env

Fill the variables with your own values

	MAILGUN_API_KEY=verylongkey
	MAILGUN_HOSTNAME=www.example.com

	MAILGUN_FROM=info@example.com

Start sending mails :)