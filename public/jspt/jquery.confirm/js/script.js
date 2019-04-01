$(document).ready(function(){
	
	$('#alertButton').click(function(){
		
		$.confirm({
			'title'		: '削除',
			'message'	: '<div>本当に削除してよろしいですか？</div><div>削除した後は投稿の順番がスキップされます</div>',
			'buttons'	: {
				'Yes'	: {
					'class'	: 'blue',
					'action': function(){
						elem.slideUp();
					}
				},
				'No'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
				}
			}
		});
		
	});
	
});