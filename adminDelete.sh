echo "Hi, Your event $2 has been deleted by admin\n" \
		| mailx \
		-s "Delete Event Notification" \
		-S smtp=smtp://students.iiit.ac.in \
		-S smtp-auth=login \
		-S smtp-auth-user=ujjainwala.m@students.iiit.ac.in \
		-S smtp-auth-password=$(cat /var/www/html/EventBuzz/.ldapsecret) \
		-S from="syed.ahmad@students.iiit.ac.in" \
		$1