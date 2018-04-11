echo "The event you have registered has been updated and is under verification process .\nYou will get notification mail after event verification. Event Name : $2 " \
		| mailx \
		-s "Event Notification" \
		-S smtp=smtp://students.iiit.ac.in \
		-S smtp-auth=login \
		-S smtp-auth-user=ujjainwala.m@students.iiit.ac.in \
		-S smtp-auth-password=$(cat /var/www/html/EventBuzz/.ldapsecret) \
		-S from="EventBuzz@students.iiit.ac.in" \
		$1
