$(document).ready(function() {

	/**
	 * ************************************************************************
	 *				Отправка формы при нажатии Ctrl + S
	 * ************************************************************************
	 */
	var ctrlDown = false;
	var ctrlKey  = 17, sKey = 83;

	$(document)
		.keydown(function(e) {
			
			// Зажата клавиша Ctrl
			if (e.keyCode == ctrlKey) {
				
				ctrlDown = true;
			}
			
			// Нажали сочетвние клавиш Ctrl + S
			if (ctrlDown && e.keyCode == sKey) {
				
				// Если есть форма, которую можно отправить, то выполняем отправку и гасим событие
				if ($( '.role-form input[name="save"]' ).length) {
					$( '.role-form input[name="save"]' ).trigger('click');
					return false;
				}	
			}
		})
		.keyup(function(e) {
			
			// Клавиша Ctrl отпущена
			if (e.keyCode == ctrlKey) {
				
				ctrlDown = false;
			}
		});
});