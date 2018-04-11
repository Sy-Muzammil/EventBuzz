echo "The event you have registered has been updated. Event Name : $2  Link : http://localhost/EventBuzz/EventProfile.php?id=$3" \
		| mailx \
		-s "Event Notification" \
		-S smtp=smtp://students.iiit.ac.in \
		-S smtp-auth=login \
		-S smtp-auth-user=ujjainwala.m@students.iiit.ac.in \
		-S smtp-auth-password=$(cat /var/www/html/EventBuzz/.ldapsecret) \
		-S from="EventBuzz@students.iiit.ac.in" \
		$1
