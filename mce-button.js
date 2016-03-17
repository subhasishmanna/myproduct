(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton('my_mce_button', {
			text: 'Shortcodes',
			icon: 'moderna',
			type: 'menubutton',
			//menu creat
			menu: [
				{
					// first menu item
					text: 'PROGRESS BAR',
						
					onclick: function()  {
								editor.windowManager.open( {
									title: 'Progess Bar',
									body: [
										{
											type: 'textbox',
											name: 'textboxName',
											label: 'VALUE IN PERCENTAGE',
											value: '30'
										},
										{
											type: 'textbox',
											name: 'multilineName',
											label: 'BAR COLOR',
											value: '#FFC9FF',
											
										},
										{
											type: 'listbox',
											name: 'listboxName',
											label: 'PROGESS BAR STYLE',
											'values': [
												{text: 'Normal', value: 'progress'},
												{text: 'Striped', value: 'progress progress-striped'},
												{text: 'Active', value: 'progress progress-striped active'}
											]
										}
									],
									onsubmit: function( e ) {
										editor.insertContent( '[progess_bar value="' + e.data.textboxName + '" color="' + e.data.multilineName + '" class="' + e.data.listboxName + '"]');
									}
								});
							}	
					// enod of first menu item	
				}, 
				{
	
	// first menu item
	text: 'BUTTON',
		
	onclick: function()  {
				editor.windowManager.open( {
					title: 'BUTTON',
					body: [
						{
							type: 'textbox',
							name: 'btntext',
							label: 'TEXT SHOWN ON BUTTON',
							value: 'CLICK HERE'
						},
						{
							type: 'textbox',
							name: 'btnlink',
							label: 'BUTTON LINK',
							value: 'https://www.example.com/',
							
						},
						{
							type: 'textbox',
							name: 'btnicon',
							label: 'BUTTON ICON',
							value: 'glass',
							
						},
						
					],
					onsubmit: function( e ) {
						editor.insertContent( '[progess_bar text="' + e.data.btntext + '" link="' + e.data.btnlink + '" class="' + e.data.btnicon + '"]');
					}
				});
			}	
	// enod of first menu item	
					
				},
			],
			
		});
	});
})();
/* [progess_bar  value="90"  class="progress progress-striped active" color="black" ]
[btn text="facebook" class="success"  link="facebook.com" icon="facebook"] 
http://www.wpexplorer.com/wordpress-tinymce-tweaks/

*/