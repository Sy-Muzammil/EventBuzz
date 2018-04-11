echo "Hi, We are Sorry to Inform you that the event registered by you no longer exist.Event Name : $2\n" \
		| mailx \
		-s "Delete Event Notification" \
		-S smtp=smtp://students.iiit.ac.in \
		-S smtp-auth=login \
		-S smtp-auth-user=ujjainwala.m@students.iiit.ac.in \
		-S smtp-auth-password=$(cat /var/www/html/EventBuzz/.ldapsecret) \
		-S from="syed.ahmad@students.iiit.ac.in" \
		$1