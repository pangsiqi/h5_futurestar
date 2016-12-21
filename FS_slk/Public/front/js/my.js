(function($) {
	$(document).ready(function() {

		// $(".login").one('click', modalLogin);
		// $(".register").one('click', modalResStu);
		// $("#index_login_username").on('blur', judgeNull);
		$("#index_login_password").on('blur', judgeNull);
		// $(".JS-teacherMobile").on("blur", checkPhone);
		//首页点击登录和学生注册
		function modalLogin() {
			$("#modal-overlay").empty();
			var _html = document.getElementById("modal-login").innerHTML;
			$("#modal-overlay").append(_html);
			$("#modal-overlay").css("visibility", 'visible');
		}

		// function checkPhone() {
		// 	var _value = $(this).val();
		// 	if (!_value) {
		// 		$(this).next('.errorTips').text("手机号不能为空");
		// 	} else {
		// 		$(this).next('.errorTips').text();
		// 	}
		// 	if (!(/^1[34578]\d{9}$/.test(_value))) {
		// 		$(this).next('.errorTips').text("请输入正确的手机号");
		// 	} else {
		// 		$(this).next('.errorTips').text();
		// 	}
		// }
		// 手机号码的验证
		// function checkPhonePattern() {
		// 	var phone = $('.JS-inputEvent').val();
		// 	if (!(/^1[34578]\d{9}$/.test(phone))) {
		// 		console.log($(this).next('.errorTips'));
		// 		$(this).next('.errorTips').text("请输入正确的手机号");
		// 	}

		// }

		function modalResStu() {
			$("#modal-overlay").empty();
			var _html = document.getElementById("modal-register-student").innerHTML;
			$("#modal-overlay").append(_html);
			$("#modal-overlay").css("visibility", 'visible');
		}
		// 模态框
		// function overlay() {
		// 	var _href = $(this).children().attr('href').substr(1);
		// 	var e1 = document.getElementById(_href);
		// 	e1.style.visibility = (e1.style.visibility == "visible") ? "hidden" : "visible";
		// }

		//判断密码是否为空
		function judgeNull() {
			var oText = $(this).val();
			if (oText == '') {
				$(this).next("#telErrorTips").html("请输入密码");
			}
		}
		//表单验证
		function checkFrom() {
			//获取手机号和密码
			var tel = $("#index_login_username").val();
			var pwd = $("#index_login_password").val();
			// console.log(tel);
			// console.log(pwd);
		}

	});

})(jQuery);