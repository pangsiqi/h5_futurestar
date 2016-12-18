$(document).ready(function() {
    gradeSwitch();
    sexSwitch();
    $(".JS-nameInput").blur(checkName);
    $(".JS-teatelInput").blur(checkTel);
    $(".JS-parenttelInput").blur(checkTel);

    $(".JS-teacherRealame").blur(checkName);
    $(".JS-teacherMobile").blur(checkTel);

    function gradeSwitch() {
        var gradeItem = $(".select-grade");
        for (var i = 0; i < gradeItem.length; i++) {
            gradeItem[i].onclick = function() {
                for (var j = 0; j < gradeItem.length; j++) {
                    $(gradeItem[j]).find(".grade-item").attr('value', '');
                    gradeItem[j].className = '';
                }
                $(this).addClass('active');
                var val = $(this).text();
                $(".grade-item").attr('value', val);
            }
        }
    }

    function sexSwitch() {
        var sexItem = $(".select-sex-item");
        for (var i = 0; i < sexItem.length; i++) {
            sexItem[i].onclick = function() {
                for (var j = 0; j < sexItem.length; j++) {
                    $(sexItem[j]).find(".sex-item").attr('value', '');
                    sexItem[j].className = '';
                }
                $(this).addClass('active');
                var val = $(this).text();
                $(".sex-item").attr('value', val);
            }
        }
    }

    function checkName() {
        if ($(this).val() == '') {
            $(this).next(".errorTips").html("真实姓名不能为空");
        } else {
            var regName = /^[\u4e00-\u9fa5]{2,4}$/;
            if (!regName.test($(this).val())) {
                $(this).next(".errorTips").html('真实姓名填写有误');
                return false;
            } else {
                $(this).next(".errorTips").html("");
            }
        }
    }

    function checkTel() {
        console.log($(this).val());
        if ($(this).val() == '') {
            $(this).next(".errorTips").html("手机号不能为空");
        } else {
            var mobileRegex = /^(((1[3456789][0-9]{1})|(15[0-9]{1}))+\d{8})$/;
            if (!mobileRegex.test($(this).val())) {
                $(this).next(".errorTips").html('手机号填写有误');
                return false;
            } else {
                $(this).next(".errorTips").html("");
            }
        }
    }

});