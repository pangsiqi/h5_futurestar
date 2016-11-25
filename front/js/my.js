(function($) {
	$(document).ready(function() {
		var clicked = false;
		$(".login").one('click', modalLogin);
		$(".register").one('click', modalResStu);
		$("#index_login_username").on('blur', judgeNull);
		$("#index_login_password").on('blur', judgeNull);
		$(".icon-6").on('click', learnOneself);
		//首页点击登录和学生注册
		function modalLogin() {
			$("#modal-overlay").empty();
			var _html = document.getElementById("modal-login").innerHTML;
			$("#modal-overlay").append(_html);
			$("#modal-overlay").css("visibility", 'visible');
		}

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

		//判断用户名和密码是否为空
		function judgeNull() {
			var oText = $(this).val();
			if (oText == '') {
				$(this).next().css('display', 'block');
			} else {
				$(this).next().css('display', 'none');
			}
		}
		//表单验证
		function checkFrom() {
			//获取手机号和密码
			var tel = $("#index_login_username").val();
			var pwd = $("#index_login_password").val();
			console.log(tel);
			console.log(pwd);
		}
		// 记住我图片变化
		function learnOneself() {
			console.log("a");
			if (clicked == false) {
				$(this).attr('class', 'login-icon icon-7');
				clicked = true;
			} else {
				$(this).attr('class', 'login-icon icon-6');
				clicked = false;
			}
		}
	});

})(jQuery);