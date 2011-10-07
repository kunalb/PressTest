(function($){
	$(function(){
		$('#pt-phpunit-runtests').click(function(){
			$('.pt-phpunit-tester').attr('disabled', 'disabled');
			$('#pt-phpunit-loader').addClass( 'active' );
			var src = window.pt.phpunit + "&pt-args=" + encodeURIComponent( $('#pt-phpunit-args').val() );
			$.get(src, {}, function(data){
				$('#pt-phpunit-loader').removeClass( 'active' );
				$('#pt-phpunit-output').html(data);
				$('.pt-phpunit-tester').removeAttr('disabled');
			});
		});
	});
}(jQuery));
