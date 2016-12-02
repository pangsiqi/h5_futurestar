(function($) {
	$(document).ready(function() {
		// 手机号码的验证
		function checkPhone() {
			var phone = $('.JS-classInput').val();
			if (!(/^1[34578]\d{9}$/.test(phone))) {
				return false;
			}
		}
		//判断用户名和密码是否为空
		function judgeNull() {
			var oText = $(this).val();
			if (oText == '') {
				$(this).next().css('display', 'block');
			} else {
				$(this).next().css('display', 'none');
			}
		}
	});

})(jQuery);