	<h3>Приемы с Установщиком</h3>

	<h4>Решение возможных ошибок</h4>

	<ul class="marked-list">
		<li>
			<dl class="inline-term">
				<dt>{"wp-auth-check":true,"server_time":1441953170}</dt>
				<dd>Wordpress “heart beat”, не является внутренней ошибкой cherryframework. Возникает в случае задержек ответа сервера, или отрабатывания того или иного скрипта.</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>The package could not be installed. PCLZIP_ERR_BAD_FORMAT (-10) : Unable to find End of Central Dir Record signature</dt>
				<dd>Нажать Retry, если на том же месте та же ошибка - передать разработчикам: название шага на котором произошла ошибка, доступ на сайт (админка и ФТП), лицензионный ключ.</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Can not send activation request. connect() timed out!</dt>
				<dd>Не отвечает сервер cloud.cherryframework.com, через некоторое время 1-2 мин. Необходимо повторить попытку.</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Can not send activation request. Received HTTP code 403 from proxy after CONNECT</dt>
				<dd>Ошибка из-за конфигурацией сервера, возможно не поддерживается работа с сессиями, обратится в службу тех поддержки.</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>The package could not be installed. The plugin contains no files. Plugin install failed.</dt>
				<dd>Обнулить хосты для ключа, на сайте c ошибкой - перейти по ссылке wp-admin/tools.php?page=monstroid-wizard&step=enter-key&type=premium, активировать ключ заново и запустить установку повторно.</dd>
			</dl>
		</li>
		<li>
			<dl class="inline-term">
				<dt>Activation request error 0-. Please try again later.</dt>
				<dd>Сайт клиента не поддерживает удаленные запросы через HTTPS - необходимо обратится в тех-поддержку.</dd>
			</dl>
		</li>
	</ul>