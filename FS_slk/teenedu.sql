/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : teenedu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-12-18 11:33:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for adminuser
-- ----------------------------
DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adminuser
-- ----------------------------
INSERT INTO `adminuser` VALUES ('1', 'futurestar', '123456');

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_index` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=392 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('1', '1', '1', '北京市');
INSERT INTO `city` VALUES ('2', '1', '2', '天津市');
INSERT INTO `city` VALUES ('3', '1', '3', '上海市');
INSERT INTO `city` VALUES ('4', '1', '4', '重庆市');
INSERT INTO `city` VALUES ('5', '1', '5', '石家庄市');
INSERT INTO `city` VALUES ('6', '2', '5', '唐山市');
INSERT INTO `city` VALUES ('7', '3', '5', '秦皇岛市');
INSERT INTO `city` VALUES ('8', '4', '5', '邯郸市');
INSERT INTO `city` VALUES ('9', '5', '5', '邢台市');
INSERT INTO `city` VALUES ('10', '6', '5', '保定市');
INSERT INTO `city` VALUES ('11', '7', '5', '张家口市');
INSERT INTO `city` VALUES ('12', '8', '5', '承德市');
INSERT INTO `city` VALUES ('13', '9', '5', '沧州市');
INSERT INTO `city` VALUES ('14', '10', '5', '廊坊市');
INSERT INTO `city` VALUES ('15', '11', '5', '衡水市');
INSERT INTO `city` VALUES ('16', '1', '6', '太原市');
INSERT INTO `city` VALUES ('17', '2', '6', '大同市');
INSERT INTO `city` VALUES ('18', '3', '6', '阳泉市');
INSERT INTO `city` VALUES ('19', '4', '6', '长治市');
INSERT INTO `city` VALUES ('20', '5', '6', '晋城市');
INSERT INTO `city` VALUES ('21', '6', '6', '朔州市');
INSERT INTO `city` VALUES ('22', '7', '6', '晋中市');
INSERT INTO `city` VALUES ('23', '8', '6', '运城市');
INSERT INTO `city` VALUES ('24', '9', '6', '忻州市');
INSERT INTO `city` VALUES ('25', '10', '6', '临汾市');
INSERT INTO `city` VALUES ('26', '11', '6', '吕梁市');
INSERT INTO `city` VALUES ('27', '1', '7', '台北市');
INSERT INTO `city` VALUES ('28', '2', '7', '高雄市');
INSERT INTO `city` VALUES ('29', '3', '7', '基隆市');
INSERT INTO `city` VALUES ('30', '4', '7', '台中市');
INSERT INTO `city` VALUES ('31', '5', '7', '台南市');
INSERT INTO `city` VALUES ('32', '6', '7', '新竹市');
INSERT INTO `city` VALUES ('33', '7', '7', '嘉义市');
INSERT INTO `city` VALUES ('34', '8', '7', '台北县');
INSERT INTO `city` VALUES ('35', '9', '7', '宜兰县');
INSERT INTO `city` VALUES ('36', '10', '7', '桃园县');
INSERT INTO `city` VALUES ('37', '11', '7', '新竹县');
INSERT INTO `city` VALUES ('38', '12', '7', '苗栗县');
INSERT INTO `city` VALUES ('39', '13', '7', '台中县');
INSERT INTO `city` VALUES ('40', '14', '7', '彰化县');
INSERT INTO `city` VALUES ('41', '15', '7', '南投县');
INSERT INTO `city` VALUES ('42', '16', '7', '云林县');
INSERT INTO `city` VALUES ('43', '17', '7', '嘉义县');
INSERT INTO `city` VALUES ('44', '18', '7', '台南县');
INSERT INTO `city` VALUES ('45', '19', '7', '高雄县');
INSERT INTO `city` VALUES ('46', '20', '7', '屏东县');
INSERT INTO `city` VALUES ('47', '21', '7', '澎湖县');
INSERT INTO `city` VALUES ('48', '22', '7', '台东县');
INSERT INTO `city` VALUES ('49', '23', '7', '花莲县');
INSERT INTO `city` VALUES ('50', '1', '8', '沈阳市');
INSERT INTO `city` VALUES ('51', '2', '8', '大连市');
INSERT INTO `city` VALUES ('52', '3', '8', '鞍山市');
INSERT INTO `city` VALUES ('53', '4', '8', '抚顺市');
INSERT INTO `city` VALUES ('54', '5', '8', '本溪市');
INSERT INTO `city` VALUES ('55', '6', '8', '丹东市');
INSERT INTO `city` VALUES ('56', '7', '8', '锦州市');
INSERT INTO `city` VALUES ('57', '8', '8', '营口市');
INSERT INTO `city` VALUES ('58', '9', '8', '阜新市');
INSERT INTO `city` VALUES ('59', '10', '8', '辽阳市');
INSERT INTO `city` VALUES ('60', '11', '8', '盘锦市');
INSERT INTO `city` VALUES ('61', '12', '8', '铁岭市');
INSERT INTO `city` VALUES ('62', '13', '8', '朝阳市');
INSERT INTO `city` VALUES ('63', '14', '8', '葫芦岛市');
INSERT INTO `city` VALUES ('64', '1', '9', '长春市');
INSERT INTO `city` VALUES ('65', '2', '9', '吉林市');
INSERT INTO `city` VALUES ('66', '3', '9', '四平市');
INSERT INTO `city` VALUES ('67', '4', '9', '辽源市');
INSERT INTO `city` VALUES ('68', '5', '9', '通化市');
INSERT INTO `city` VALUES ('69', '6', '9', '白山市');
INSERT INTO `city` VALUES ('70', '7', '9', '松原市');
INSERT INTO `city` VALUES ('71', '8', '9', '白城市');
INSERT INTO `city` VALUES ('72', '9', '9', '延边朝鲜族自治州');
INSERT INTO `city` VALUES ('73', '1', '10', '哈尔滨市');
INSERT INTO `city` VALUES ('74', '2', '10', '齐齐哈尔市');
INSERT INTO `city` VALUES ('75', '3', '10', '鹤岗市');
INSERT INTO `city` VALUES ('76', '4', '10', '双鸭山市');
INSERT INTO `city` VALUES ('77', '5', '10', '鸡西市');
INSERT INTO `city` VALUES ('78', '6', '10', '大庆市');
INSERT INTO `city` VALUES ('79', '7', '10', '伊春市');
INSERT INTO `city` VALUES ('80', '8', '10', '牡丹江市');
INSERT INTO `city` VALUES ('81', '9', '10', '佳木斯市');
INSERT INTO `city` VALUES ('82', '10', '10', '七台河市');
INSERT INTO `city` VALUES ('83', '11', '10', '黑河市');
INSERT INTO `city` VALUES ('84', '12', '10', '绥化市');
INSERT INTO `city` VALUES ('85', '13', '10', '大兴安岭地区');
INSERT INTO `city` VALUES ('86', '1', '11', '南京市');
INSERT INTO `city` VALUES ('87', '2', '11', '无锡市');
INSERT INTO `city` VALUES ('88', '3', '11', '徐州市');
INSERT INTO `city` VALUES ('89', '4', '11', '常州市');
INSERT INTO `city` VALUES ('90', '5', '11', '苏州市');
INSERT INTO `city` VALUES ('91', '6', '11', '南通市');
INSERT INTO `city` VALUES ('92', '7', '11', '连云港市');
INSERT INTO `city` VALUES ('93', '8', '11', '淮安市');
INSERT INTO `city` VALUES ('94', '9', '11', '盐城市');
INSERT INTO `city` VALUES ('95', '10', '11', '扬州市');
INSERT INTO `city` VALUES ('96', '11', '11', '镇江市');
INSERT INTO `city` VALUES ('97', '12', '11', '泰州市');
INSERT INTO `city` VALUES ('98', '13', '11', '宿迁市');
INSERT INTO `city` VALUES ('99', '1', '12', '杭州市');
INSERT INTO `city` VALUES ('100', '2', '12', '宁波市');
INSERT INTO `city` VALUES ('101', '3', '12', '温州市');
INSERT INTO `city` VALUES ('102', '4', '12', '嘉兴市');
INSERT INTO `city` VALUES ('103', '5', '12', '湖州市');
INSERT INTO `city` VALUES ('104', '6', '12', '绍兴市');
INSERT INTO `city` VALUES ('105', '7', '12', '金华市');
INSERT INTO `city` VALUES ('106', '8', '12', '衢州市');
INSERT INTO `city` VALUES ('107', '9', '12', '舟山市');
INSERT INTO `city` VALUES ('108', '10', '12', '台州市');
INSERT INTO `city` VALUES ('109', '11', '12', '丽水市');
INSERT INTO `city` VALUES ('110', '1', '13', '合肥市');
INSERT INTO `city` VALUES ('111', '2', '13', '芜湖市');
INSERT INTO `city` VALUES ('112', '3', '13', '蚌埠市');
INSERT INTO `city` VALUES ('113', '4', '13', '淮南市');
INSERT INTO `city` VALUES ('114', '5', '13', '马鞍山市');
INSERT INTO `city` VALUES ('115', '6', '13', '淮北市');
INSERT INTO `city` VALUES ('116', '7', '13', '铜陵市');
INSERT INTO `city` VALUES ('117', '8', '13', '安庆市');
INSERT INTO `city` VALUES ('118', '9', '13', '黄山市');
INSERT INTO `city` VALUES ('119', '10', '13', '滁州市');
INSERT INTO `city` VALUES ('120', '11', '13', '阜阳市');
INSERT INTO `city` VALUES ('121', '12', '13', '宿州市');
INSERT INTO `city` VALUES ('122', '13', '13', '巢湖市');
INSERT INTO `city` VALUES ('123', '14', '13', '六安市');
INSERT INTO `city` VALUES ('124', '15', '13', '亳州市');
INSERT INTO `city` VALUES ('125', '16', '13', '池州市');
INSERT INTO `city` VALUES ('126', '17', '13', '宣城市');
INSERT INTO `city` VALUES ('127', '1', '14', '福州市');
INSERT INTO `city` VALUES ('128', '2', '14', '厦门市');
INSERT INTO `city` VALUES ('129', '3', '14', '莆田市');
INSERT INTO `city` VALUES ('130', '4', '14', '三明市');
INSERT INTO `city` VALUES ('131', '5', '14', '泉州市');
INSERT INTO `city` VALUES ('132', '6', '14', '漳州市');
INSERT INTO `city` VALUES ('133', '7', '14', '南平市');
INSERT INTO `city` VALUES ('134', '8', '14', '龙岩市');
INSERT INTO `city` VALUES ('135', '9', '14', '宁德市');
INSERT INTO `city` VALUES ('136', '1', '15', '南昌市');
INSERT INTO `city` VALUES ('137', '2', '15', '景德镇市');
INSERT INTO `city` VALUES ('138', '3', '15', '萍乡市');
INSERT INTO `city` VALUES ('139', '4', '15', '九江市');
INSERT INTO `city` VALUES ('140', '5', '15', '新余市');
INSERT INTO `city` VALUES ('141', '6', '15', '鹰潭市');
INSERT INTO `city` VALUES ('142', '7', '15', '赣州市');
INSERT INTO `city` VALUES ('143', '8', '15', '吉安市');
INSERT INTO `city` VALUES ('144', '9', '15', '宜春市');
INSERT INTO `city` VALUES ('145', '10', '15', '抚州市');
INSERT INTO `city` VALUES ('146', '11', '15', '上饶市');
INSERT INTO `city` VALUES ('147', '1', '16', '济南市');
INSERT INTO `city` VALUES ('148', '2', '16', '青岛市');
INSERT INTO `city` VALUES ('149', '3', '16', '淄博市');
INSERT INTO `city` VALUES ('150', '4', '16', '枣庄市');
INSERT INTO `city` VALUES ('151', '5', '16', '东营市');
INSERT INTO `city` VALUES ('152', '6', '16', '烟台市');
INSERT INTO `city` VALUES ('153', '7', '16', '潍坊市');
INSERT INTO `city` VALUES ('154', '8', '16', '济宁市');
INSERT INTO `city` VALUES ('155', '9', '16', '泰安市');
INSERT INTO `city` VALUES ('156', '10', '16', '威海市');
INSERT INTO `city` VALUES ('157', '11', '16', '日照市');
INSERT INTO `city` VALUES ('158', '12', '16', '莱芜市');
INSERT INTO `city` VALUES ('159', '13', '16', '临沂市');
INSERT INTO `city` VALUES ('160', '14', '16', '德州市');
INSERT INTO `city` VALUES ('161', '15', '16', '聊城市');
INSERT INTO `city` VALUES ('162', '16', '16', '滨州市');
INSERT INTO `city` VALUES ('163', '17', '16', '菏泽市');
INSERT INTO `city` VALUES ('164', '1', '17', '郑州市');
INSERT INTO `city` VALUES ('165', '2', '17', '开封市');
INSERT INTO `city` VALUES ('166', '3', '17', '洛阳市');
INSERT INTO `city` VALUES ('167', '4', '17', '平顶山市');
INSERT INTO `city` VALUES ('168', '5', '17', '安阳市');
INSERT INTO `city` VALUES ('169', '6', '17', '鹤壁市');
INSERT INTO `city` VALUES ('170', '7', '17', '新乡市');
INSERT INTO `city` VALUES ('171', '8', '17', '焦作市');
INSERT INTO `city` VALUES ('172', '9', '17', '濮阳市');
INSERT INTO `city` VALUES ('173', '10', '17', '许昌市');
INSERT INTO `city` VALUES ('174', '11', '17', '漯河市');
INSERT INTO `city` VALUES ('175', '12', '17', '三门峡市');
INSERT INTO `city` VALUES ('176', '13', '17', '南阳市');
INSERT INTO `city` VALUES ('177', '14', '17', '商丘市');
INSERT INTO `city` VALUES ('178', '15', '17', '信阳市');
INSERT INTO `city` VALUES ('179', '16', '17', '周口市');
INSERT INTO `city` VALUES ('180', '17', '17', '驻马店市');
INSERT INTO `city` VALUES ('181', '18', '17', '济源市');
INSERT INTO `city` VALUES ('182', '1', '18', '武汉市');
INSERT INTO `city` VALUES ('183', '2', '18', '黄石市');
INSERT INTO `city` VALUES ('184', '3', '18', '十堰市');
INSERT INTO `city` VALUES ('185', '4', '18', '荆州市');
INSERT INTO `city` VALUES ('186', '5', '18', '宜昌市');
INSERT INTO `city` VALUES ('187', '6', '18', '襄樊市');
INSERT INTO `city` VALUES ('188', '7', '18', '鄂州市');
INSERT INTO `city` VALUES ('189', '8', '18', '荆门市');
INSERT INTO `city` VALUES ('190', '9', '18', '孝感市');
INSERT INTO `city` VALUES ('191', '10', '18', '黄冈市');
INSERT INTO `city` VALUES ('192', '11', '18', '咸宁市');
INSERT INTO `city` VALUES ('193', '12', '18', '随州市');
INSERT INTO `city` VALUES ('194', '13', '18', '仙桃市');
INSERT INTO `city` VALUES ('195', '14', '18', '天门市');
INSERT INTO `city` VALUES ('196', '15', '18', '潜江市');
INSERT INTO `city` VALUES ('197', '16', '18', '神农架林区');
INSERT INTO `city` VALUES ('198', '17', '18', '恩施土家族苗族自治州');
INSERT INTO `city` VALUES ('199', '1', '19', '长沙市');
INSERT INTO `city` VALUES ('200', '2', '19', '株洲市');
INSERT INTO `city` VALUES ('201', '3', '19', '湘潭市');
INSERT INTO `city` VALUES ('202', '4', '19', '衡阳市');
INSERT INTO `city` VALUES ('203', '5', '19', '邵阳市');
INSERT INTO `city` VALUES ('204', '6', '19', '岳阳市');
INSERT INTO `city` VALUES ('205', '7', '19', '常德市');
INSERT INTO `city` VALUES ('206', '8', '19', '张家界市');
INSERT INTO `city` VALUES ('207', '9', '19', '益阳市');
INSERT INTO `city` VALUES ('208', '10', '19', '郴州市');
INSERT INTO `city` VALUES ('209', '11', '19', '永州市');
INSERT INTO `city` VALUES ('210', '12', '19', '怀化市');
INSERT INTO `city` VALUES ('211', '13', '19', '娄底市');
INSERT INTO `city` VALUES ('212', '14', '19', '湘西土家族苗族自治州');
INSERT INTO `city` VALUES ('213', '1', '20', '广州市');
INSERT INTO `city` VALUES ('214', '2', '20', '深圳市');
INSERT INTO `city` VALUES ('215', '3', '20', '珠海市');
INSERT INTO `city` VALUES ('216', '4', '20', '汕头市');
INSERT INTO `city` VALUES ('217', '5', '20', '韶关市');
INSERT INTO `city` VALUES ('218', '6', '20', '佛山市');
INSERT INTO `city` VALUES ('219', '7', '20', '江门市');
INSERT INTO `city` VALUES ('220', '8', '20', '湛江市');
INSERT INTO `city` VALUES ('221', '9', '20', '茂名市');
INSERT INTO `city` VALUES ('222', '10', '20', '肇庆市');
INSERT INTO `city` VALUES ('223', '11', '20', '惠州市');
INSERT INTO `city` VALUES ('224', '12', '20', '梅州市');
INSERT INTO `city` VALUES ('225', '13', '20', '汕尾市');
INSERT INTO `city` VALUES ('226', '14', '20', '河源市');
INSERT INTO `city` VALUES ('227', '15', '20', '阳江市');
INSERT INTO `city` VALUES ('228', '16', '20', '清远市');
INSERT INTO `city` VALUES ('229', '17', '20', '东莞市');
INSERT INTO `city` VALUES ('230', '18', '20', '中山市');
INSERT INTO `city` VALUES ('231', '19', '20', '潮州市');
INSERT INTO `city` VALUES ('232', '20', '20', '揭阳市');
INSERT INTO `city` VALUES ('233', '21', '20', '云浮市');
INSERT INTO `city` VALUES ('234', '1', '21', '兰州市');
INSERT INTO `city` VALUES ('235', '2', '21', '金昌市');
INSERT INTO `city` VALUES ('236', '3', '21', '白银市');
INSERT INTO `city` VALUES ('237', '4', '21', '天水市');
INSERT INTO `city` VALUES ('238', '5', '21', '嘉峪关市');
INSERT INTO `city` VALUES ('239', '6', '21', '武威市');
INSERT INTO `city` VALUES ('240', '7', '21', '张掖市');
INSERT INTO `city` VALUES ('241', '8', '21', '平凉市');
INSERT INTO `city` VALUES ('242', '9', '21', '酒泉市');
INSERT INTO `city` VALUES ('243', '10', '21', '庆阳市');
INSERT INTO `city` VALUES ('244', '11', '21', '定西市');
INSERT INTO `city` VALUES ('245', '12', '21', '陇南市');
INSERT INTO `city` VALUES ('246', '13', '21', '临夏回族自治州');
INSERT INTO `city` VALUES ('247', '14', '21', '甘南藏族自治州');
INSERT INTO `city` VALUES ('248', '1', '22', '成都市');
INSERT INTO `city` VALUES ('249', '2', '22', '自贡市');
INSERT INTO `city` VALUES ('250', '3', '22', '攀枝花市');
INSERT INTO `city` VALUES ('251', '4', '22', '泸州市');
INSERT INTO `city` VALUES ('252', '5', '22', '德阳市');
INSERT INTO `city` VALUES ('253', '6', '22', '绵阳市');
INSERT INTO `city` VALUES ('254', '7', '22', '广元市');
INSERT INTO `city` VALUES ('255', '8', '22', '遂宁市');
INSERT INTO `city` VALUES ('256', '9', '22', '内江市');
INSERT INTO `city` VALUES ('257', '10', '22', '乐山市');
INSERT INTO `city` VALUES ('258', '11', '22', '南充市');
INSERT INTO `city` VALUES ('259', '12', '22', '眉山市');
INSERT INTO `city` VALUES ('260', '13', '22', '宜宾市');
INSERT INTO `city` VALUES ('261', '14', '22', '广安市');
INSERT INTO `city` VALUES ('262', '15', '22', '达州市');
INSERT INTO `city` VALUES ('263', '16', '22', '雅安市');
INSERT INTO `city` VALUES ('264', '17', '22', '巴中市');
INSERT INTO `city` VALUES ('265', '18', '22', '资阳市');
INSERT INTO `city` VALUES ('266', '19', '22', '阿坝藏族羌族自治州');
INSERT INTO `city` VALUES ('267', '20', '22', '甘孜藏族自治州');
INSERT INTO `city` VALUES ('268', '21', '22', '凉山彝族自治州');
INSERT INTO `city` VALUES ('269', '1', '23', '贵阳市');
INSERT INTO `city` VALUES ('270', '2', '23', '六盘水市');
INSERT INTO `city` VALUES ('271', '3', '23', '遵义市');
INSERT INTO `city` VALUES ('272', '4', '23', '安顺市');
INSERT INTO `city` VALUES ('273', '5', '23', '铜仁地区');
INSERT INTO `city` VALUES ('274', '6', '23', '毕节地区');
INSERT INTO `city` VALUES ('275', '7', '23', '黔西南布依族苗族自治州');
INSERT INTO `city` VALUES ('276', '8', '23', '黔东南苗族侗族自治州');
INSERT INTO `city` VALUES ('277', '9', '23', '黔南布依族苗族自治州');
INSERT INTO `city` VALUES ('278', '1', '24', '海口市');
INSERT INTO `city` VALUES ('279', '2', '24', '三亚市');
INSERT INTO `city` VALUES ('280', '3', '24', '五指山市');
INSERT INTO `city` VALUES ('281', '4', '24', '琼海市');
INSERT INTO `city` VALUES ('282', '5', '24', '儋州市');
INSERT INTO `city` VALUES ('283', '6', '24', '文昌市');
INSERT INTO `city` VALUES ('284', '7', '24', '万宁市');
INSERT INTO `city` VALUES ('285', '8', '24', '东方市');
INSERT INTO `city` VALUES ('286', '9', '24', '澄迈县');
INSERT INTO `city` VALUES ('287', '10', '24', '定安县');
INSERT INTO `city` VALUES ('288', '11', '24', '屯昌县');
INSERT INTO `city` VALUES ('289', '12', '24', '临高县');
INSERT INTO `city` VALUES ('290', '13', '24', '白沙黎族自治县');
INSERT INTO `city` VALUES ('291', '14', '24', '昌江黎族自治县');
INSERT INTO `city` VALUES ('292', '15', '24', '乐东黎族自治县');
INSERT INTO `city` VALUES ('293', '16', '24', '陵水黎族自治县');
INSERT INTO `city` VALUES ('294', '17', '24', '保亭黎族苗族自治县');
INSERT INTO `city` VALUES ('295', '18', '24', '琼中黎族苗族自治县');
INSERT INTO `city` VALUES ('296', '1', '25', '昆明市');
INSERT INTO `city` VALUES ('297', '2', '25', '曲靖市');
INSERT INTO `city` VALUES ('298', '3', '25', '玉溪市');
INSERT INTO `city` VALUES ('299', '4', '25', '保山市');
INSERT INTO `city` VALUES ('300', '5', '25', '昭通市');
INSERT INTO `city` VALUES ('301', '6', '25', '丽江市');
INSERT INTO `city` VALUES ('302', '7', '25', '思茅市');
INSERT INTO `city` VALUES ('303', '8', '25', '临沧市');
INSERT INTO `city` VALUES ('304', '9', '25', '文山壮族苗族自治州');
INSERT INTO `city` VALUES ('305', '10', '25', '红河哈尼族彝族自治州');
INSERT INTO `city` VALUES ('306', '11', '25', '西双版纳傣族自治州');
INSERT INTO `city` VALUES ('307', '12', '25', '楚雄彝族自治州');
INSERT INTO `city` VALUES ('308', '13', '25', '大理白族自治州');
INSERT INTO `city` VALUES ('309', '14', '25', '德宏傣族景颇族自治州');
INSERT INTO `city` VALUES ('310', '15', '25', '怒江傈傈族自治州');
INSERT INTO `city` VALUES ('311', '16', '25', '迪庆藏族自治州');
INSERT INTO `city` VALUES ('312', '1', '26', '西宁市');
INSERT INTO `city` VALUES ('313', '2', '26', '海东地区');
INSERT INTO `city` VALUES ('314', '3', '26', '海北藏族自治州');
INSERT INTO `city` VALUES ('315', '4', '26', '黄南藏族自治州');
INSERT INTO `city` VALUES ('316', '5', '26', '海南藏族自治州');
INSERT INTO `city` VALUES ('317', '6', '26', '果洛藏族自治州');
INSERT INTO `city` VALUES ('318', '7', '26', '玉树藏族自治州');
INSERT INTO `city` VALUES ('319', '8', '26', '海西蒙古族藏族自治州');
INSERT INTO `city` VALUES ('320', '1', '27', '西安市');
INSERT INTO `city` VALUES ('321', '2', '27', '铜川市');
INSERT INTO `city` VALUES ('322', '3', '27', '宝鸡市');
INSERT INTO `city` VALUES ('323', '4', '27', '咸阳市');
INSERT INTO `city` VALUES ('324', '5', '27', '渭南市');
INSERT INTO `city` VALUES ('325', '6', '27', '延安市');
INSERT INTO `city` VALUES ('326', '7', '27', '汉中市');
INSERT INTO `city` VALUES ('327', '8', '27', '榆林市');
INSERT INTO `city` VALUES ('328', '9', '27', '安康市');
INSERT INTO `city` VALUES ('329', '10', '27', '商洛市');
INSERT INTO `city` VALUES ('330', '1', '28', '南宁市');
INSERT INTO `city` VALUES ('331', '2', '28', '柳州市');
INSERT INTO `city` VALUES ('332', '3', '28', '桂林市');
INSERT INTO `city` VALUES ('333', '4', '28', '梧州市');
INSERT INTO `city` VALUES ('334', '5', '28', '北海市');
INSERT INTO `city` VALUES ('335', '6', '28', '防城港市');
INSERT INTO `city` VALUES ('336', '7', '28', '钦州市');
INSERT INTO `city` VALUES ('337', '8', '28', '贵港市');
INSERT INTO `city` VALUES ('338', '9', '28', '玉林市');
INSERT INTO `city` VALUES ('339', '10', '28', '百色市');
INSERT INTO `city` VALUES ('340', '11', '28', '贺州市');
INSERT INTO `city` VALUES ('341', '12', '28', '河池市');
INSERT INTO `city` VALUES ('342', '13', '28', '来宾市');
INSERT INTO `city` VALUES ('343', '14', '28', '崇左市');
INSERT INTO `city` VALUES ('344', '1', '29', '拉萨市');
INSERT INTO `city` VALUES ('345', '2', '29', '那曲地区');
INSERT INTO `city` VALUES ('346', '3', '29', '昌都地区');
INSERT INTO `city` VALUES ('347', '4', '29', '山南地区');
INSERT INTO `city` VALUES ('348', '5', '29', '日喀则地区');
INSERT INTO `city` VALUES ('349', '6', '29', '阿里地区');
INSERT INTO `city` VALUES ('350', '7', '29', '林芝地区');
INSERT INTO `city` VALUES ('351', '1', '30', '银川市');
INSERT INTO `city` VALUES ('352', '2', '30', '石嘴山市');
INSERT INTO `city` VALUES ('353', '3', '30', '吴忠市');
INSERT INTO `city` VALUES ('354', '4', '30', '固原市');
INSERT INTO `city` VALUES ('355', '5', '30', '中卫市');
INSERT INTO `city` VALUES ('356', '1', '31', '乌鲁木齐市');
INSERT INTO `city` VALUES ('357', '2', '31', '克拉玛依市');
INSERT INTO `city` VALUES ('358', '3', '31', '石河子市　');
INSERT INTO `city` VALUES ('359', '4', '31', '阿拉尔市');
INSERT INTO `city` VALUES ('360', '5', '31', '图木舒克市');
INSERT INTO `city` VALUES ('361', '6', '31', '五家渠市');
INSERT INTO `city` VALUES ('362', '7', '31', '吐鲁番市');
INSERT INTO `city` VALUES ('363', '8', '31', '阿克苏市');
INSERT INTO `city` VALUES ('364', '9', '31', '喀什市');
INSERT INTO `city` VALUES ('365', '10', '31', '哈密市');
INSERT INTO `city` VALUES ('366', '11', '31', '和田市');
INSERT INTO `city` VALUES ('367', '12', '31', '阿图什市');
INSERT INTO `city` VALUES ('368', '13', '31', '库尔勒市');
INSERT INTO `city` VALUES ('369', '14', '31', '昌吉市　');
INSERT INTO `city` VALUES ('370', '15', '31', '阜康市');
INSERT INTO `city` VALUES ('371', '16', '31', '米泉市');
INSERT INTO `city` VALUES ('372', '17', '31', '博乐市');
INSERT INTO `city` VALUES ('373', '18', '31', '伊宁市');
INSERT INTO `city` VALUES ('374', '19', '31', '奎屯市');
INSERT INTO `city` VALUES ('375', '20', '31', '塔城市');
INSERT INTO `city` VALUES ('376', '21', '31', '乌苏市');
INSERT INTO `city` VALUES ('377', '22', '31', '阿勒泰市');
INSERT INTO `city` VALUES ('378', '1', '32', '呼和浩特市');
INSERT INTO `city` VALUES ('379', '2', '32', '包头市');
INSERT INTO `city` VALUES ('380', '3', '32', '乌海市');
INSERT INTO `city` VALUES ('381', '4', '32', '赤峰市');
INSERT INTO `city` VALUES ('382', '5', '32', '通辽市');
INSERT INTO `city` VALUES ('383', '6', '32', '鄂尔多斯市');
INSERT INTO `city` VALUES ('384', '7', '32', '呼伦贝尔市');
INSERT INTO `city` VALUES ('385', '8', '32', '巴彦淖尔市');
INSERT INTO `city` VALUES ('386', '9', '32', '乌兰察布市');
INSERT INTO `city` VALUES ('387', '10', '32', '锡林郭勒盟');
INSERT INTO `city` VALUES ('388', '11', '32', '兴安盟');
INSERT INTO `city` VALUES ('389', '12', '32', '阿拉善盟');
INSERT INTO `city` VALUES ('390', '1', '33', '澳门特别行政区');
INSERT INTO `city` VALUES ('391', '1', '34', '香港特别行政区');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `classid` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `username` char(100) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class
-- ----------------------------

-- ----------------------------
-- Table structure for classspace
-- ----------------------------
DROP TABLE IF EXISTS `classspace`;
CREATE TABLE `classspace` (
  `classid` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `username` char(100) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL,
  `imageid` longblob,
  `path` varchar(255) DEFAULT NULL COMMENT '发动态的图片路径',
  PRIMARY KEY (`messageid`),
  KEY `FK_Reference_10` (`student_id`),
  CONSTRAINT `FK_Reference_10` FOREIGN KEY (`student_id`) REFERENCES `school` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of classspace
-- ----------------------------

-- ----------------------------
-- Table structure for homework
-- ----------------------------
DROP TABLE IF EXISTS `homework`;
CREATE TABLE `homework` (
  `homeworkid` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `title` text NOT NULL,
  `starttime` datetime NOT NULL COMMENT '作业开始时间',
  `subject` char(100) DEFAULT NULL COMMENT '课程名',
  `endtime` datetime NOT NULL COMMENT '作业结束时间',
  `detail` text NOT NULL COMMENT '课程描述',
  `subjectid` int(11) DEFAULT NULL COMMENT '课程id',
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`homeworkid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of homework
-- ----------------------------
INSERT INTO `homework` VALUES ('1', '1', '2016011101', '第一单元 看图识字', '2016-12-01 09:13:28', '语文印象', '2016-12-06 00:00:00', '九色鹿', '1', '/FS/Public/uploads/2016-12-14/5850a25b452eb.swf');
INSERT INTO `homework` VALUES ('9', null, null, '英语练习', '2016-12-14 15:12:00', '英语印象', '2016-12-17 15:12:00', '英语单词练习', '3', '/FS/Public/uploads/2016-12-14/5850a1143c515.swf');
INSERT INTO `homework` VALUES ('10', null, null, '英语六', '2016-12-14 15:12:00', '英语印象', '2016-12-17 15:12:00', '英语六 ，，，拉啦啦啦啦啦啦', '3', '/FS/Public/uploads/2016-12-14/5850a1143c515.swf');
INSERT INTO `homework` VALUES ('13', null, null, '英语一', '2016-12-15 10:12:00', '英语印象', '2016-12-18 10:12:00', '英语一，学习简单的英语问候语', '3', '/FS/Public/uploads/2016-12-14/5850a1143c515.swf');
INSERT INTO `homework` VALUES ('14', null, null, '英语四', '2016-12-15 10:12:00', '英语印象', '2016-12-18 10:12:00', '英语四，啦啦啦啦啦拉', '3', '/FS/Public/uploads/2016-12-14/5850a231b9088.swf');
INSERT INTO `homework` VALUES ('15', null, null, '英语四', '2016-12-15 10:12:00', '英语印象', '2016-12-18 10:12:00', '英语四，啦啦啦啦啦拉', '3', '/FS/Public/uploads/2016-12-14/5850a231b9088.swf');
INSERT INTO `homework` VALUES ('16', null, null, '英语五', '2016-12-15 10:12:00', '英语印象', '2016-12-18 10:12:00', '英语五，你好，啦啦啦啦啦啦', '3', '/FS/Public/uploads/2016-12-14/5850a25b452ea.swf');
INSERT INTO `homework` VALUES ('17', null, null, '英语五', '2016-12-15 10:12:00', '英语印象', '2016-12-18 10:12:00', '英语五，你好，啦啦啦啦啦啦', '3', '/FS/Public/uploads/2016-12-14/5850a25b452ea.swf');
INSERT INTO `homework` VALUES ('18', null, null, '语文一', '2016-12-13 14:43:35', '语文印象', '2016-12-14 14:43:24', '孔融让梨', '1', '/FS/Public/uploads/2016-12-14/5850a81887767.swf');

-- ----------------------------
-- Table structure for message_board
-- ----------------------------
DROP TABLE IF EXISTS `message_board`;
CREATE TABLE `message_board` (
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `classid` int(11) DEFAULT NULL,
  `imageid` longblob,
  `username` char(100) DEFAULT NULL,
  `parenttime` int(11) NOT NULL COMMENT '家长发送时间',
  `wordid` int(11) NOT NULL AUTO_INCREMENT,
  `recevice` varchar(100) DEFAULT NULL,
  `parentcontent` text NOT NULL COMMENT '家长发送消息内容',
  `teachercontent` text COMMENT '教师发送内容',
  `teachertime` int(11) DEFAULT NULL COMMENT '教师发送内容时间',
  PRIMARY KEY (`wordid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message_board
-- ----------------------------
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481094204', '8', null, '阿斯顿发生的', '阿斯顿发生的发生的发生大前去前去去', null);
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481094209', '9', null, '去全文请问而', '阿斯顿发', null);
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481094216', '10', null, '阿斯顿崭新的vvq温泉', '啊水电气', null);
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481094221', '11', null, '刚果河额呵呵', '去额 去额外去', null);
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481160945', '12', null, '&lt;img title=&quot;色&quot; src=&quot;/FS/Public/front/student/images/face/2_色.gif&quot;&gt;&lt;img title=&quot;得意&quot; src=&quot;/FS/Public/front/student/images/face/4_得意.gif&quot;&gt;啦啦', '去额 去额外去', null);
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481182276', '13', null, 'adsfa sda sd asdf ad&amp;nbsp;', '去额 去额外去', null);
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481281294', '14', null, 'adfadadsf', null, null);
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481778884', '15', null, 'dsffa', null, null);
INSERT INTO `message_board` VALUES ('2016011820', '2016011101', null, null, null, '1481781094', '16', null, 'df', null, null);

-- ----------------------------
-- Table structure for presonspace
-- ----------------------------
DROP TABLE IF EXISTS `presonspace`;
CREATE TABLE `presonspace` (
  `student_id` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `username` char(100) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL,
  `imageid` longblob,
  PRIMARY KEY (`student_id`),
  CONSTRAINT `FK_Reference_7` FOREIGN KEY (`student_id`) REFERENCES `school` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of presonspace
-- ----------------------------

-- ----------------------------
-- Table structure for province
-- ----------------------------
DROP TABLE IF EXISTS `province`;
CREATE TABLE `province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of province
-- ----------------------------
INSERT INTO `province` VALUES ('1', '北京市');
INSERT INTO `province` VALUES ('2', '天津市');
INSERT INTO `province` VALUES ('3', '上海市');
INSERT INTO `province` VALUES ('4', '重庆市');
INSERT INTO `province` VALUES ('5', '河北省');
INSERT INTO `province` VALUES ('6', '山西省');
INSERT INTO `province` VALUES ('7', '台湾省');
INSERT INTO `province` VALUES ('8', '辽宁省');
INSERT INTO `province` VALUES ('9', '吉林省');
INSERT INTO `province` VALUES ('10', '黑龙江省');
INSERT INTO `province` VALUES ('11', '江苏省');
INSERT INTO `province` VALUES ('12', '浙江省');
INSERT INTO `province` VALUES ('13', '安徽省');
INSERT INTO `province` VALUES ('14', '福建省');
INSERT INTO `province` VALUES ('15', '江西省');
INSERT INTO `province` VALUES ('16', '山东省');
INSERT INTO `province` VALUES ('17', '河南省');
INSERT INTO `province` VALUES ('18', '湖北省');
INSERT INTO `province` VALUES ('19', '湖南省');
INSERT INTO `province` VALUES ('20', '广东省');
INSERT INTO `province` VALUES ('21', '甘肃省');
INSERT INTO `province` VALUES ('22', '四川省');
INSERT INTO `province` VALUES ('23', '贵州省');
INSERT INTO `province` VALUES ('24', '海南省');
INSERT INTO `province` VALUES ('25', '云南省');
INSERT INTO `province` VALUES ('26', '青海省');
INSERT INTO `province` VALUES ('27', '陕西省');
INSERT INTO `province` VALUES ('28', '广西壮族自治区');
INSERT INTO `province` VALUES ('29', '西藏自治区');
INSERT INTO `province` VALUES ('30', '宁夏回族自治区');
INSERT INTO `province` VALUES ('31', '新疆维吾尔自治区');
INSERT INTO `province` VALUES ('32', '内蒙古自治区');
INSERT INTO `province` VALUES ('33', '澳门特别行政区');
INSERT INTO `province` VALUES ('34', '香港特别行政区');

-- ----------------------------
-- Table structure for resource
-- ----------------------------
DROP TABLE IF EXISTS `resource`;
CREATE TABLE `resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `publishTime` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `summary` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of resource
-- ----------------------------
INSERT INTO `resource` VALUES ('1', '英语练习', '王小明', '2016-12-06 09:39:00', '/FS/Public/uploads/2016-12-15/5851f07d79bb1.swf', '英语单词练习');
INSERT INTO `resource` VALUES ('3', '名文赏读', '刘小明', '2016-12-01 09:49:00', '/FS/Public/uploads/2016-12-15/小兔子着太阳语言.swf', '赏读名文，写200字观后感，啊啊啊，浏览');
INSERT INTO `resource` VALUES ('5', '基本发音练习', '王小明', '2016-12-08 09:21:00', '/FS/Public/uploads/2016-12-15/5851f07d79bb1.swf', '基本发音练习');
INSERT INTO `resource` VALUES ('6', '巧算', '王小明', '2016-12-14 09:48:00', '/FS/Public/uploads/2016-12-15/5851f07d79bb1.swf', '巧算数学');
INSERT INTO `resource` VALUES ('7', '完璧归赵', '王小明', '2016-12-08 09:24:00', '/FS/Public/uploads/2016-12-15/def217.swf', '发生于战国时期的历史故事。本指蔺相如将完美无瑕的和氏璧，完好地从秦国带回赵国首都邯郸（现河北省城市），比喻把原物完好地归还物品主人');
INSERT INTO `resource` VALUES ('8', '一枕黄粱', '王小明', '2016-12-08 09:26:00', '/FS/Public/uploads/2016-12-15/z1017.swf', '从前有一个穷困潦倒的书生卢生，在邯郸一个客店遇见道士吕翁。吕翁送他一个枕头，这时店主正开始做黄粱饭，卢生小睡一会，在梦中他中进士做宰相娶美妻，儿孙满堂，生活美满。梦醒后，主人的黄粱饭都还没做熟。');
INSERT INTO `resource` VALUES ('9', '学习资源之英语练习', '王小明', '2016-12-15 09:20:00', '/FS/Public/uploads/2016-12-15/5851f07d79bb1.swf', '啊啊啊啊啊啊啊');

-- ----------------------------
-- Table structure for school
-- ----------------------------
DROP TABLE IF EXISTS `school`;
CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `username` char(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `studyblock` char(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of school
-- ----------------------------

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL COMMENT '手机号',
  `realname` varchar(100) NOT NULL COMMENT '真实姓名',
  `sex` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `school` varchar(100) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL COMMENT '班级',
  `location` varchar(100) DEFAULT NULL COMMENT '地区',
  `thumb` varchar(255) DEFAULT NULL COMMENT '头像',
  `starnum` int(11) DEFAULT NULL COMMENT '奖',
  `teatel` varchar(100) DEFAULT NULL,
  `finishtask` tinyint(4) DEFAULT NULL COMMENT '完成作业情况，完成（1），未完成（0）',
  `fenshu` float DEFAULT NULL COMMENT '分数',
  `taskfinishtime` datetime DEFAULT NULL COMMENT '作业完成时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2016011115 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('2016011101', '李小明', '123', '13879456789', '李小明', '男', '2011-04-25', '双语幼儿园', '中班', '石家庄市裕华区南二环东路20号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '4', '13866666666', '1', '90', '2016-12-14 10:44:34');
INSERT INTO `student` VALUES ('2016011102', '王华', '123', '13979456789', '王华', '女', '2011-07-15', '双语幼儿园', '小班', '石家庄市裕华区南二环东路20号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '3', '13866666666', '1', '87', '2016-12-14 10:44:34');
INSERT INTO `student` VALUES ('2016011103', '张丽丽', '123', '13988888888', '张丽丽', '男', '2010-07-12', '双语幼儿园', '小班', '石家庄市裕华区南二环东路20号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '14', '13866666666', '1', '87', '2016-12-14 10:44:34');
INSERT INTO `student` VALUES ('2016011104', '赵小明', '123', '13988444444', '赵小明', '男', '2010-07-12', '双语幼儿园', '小班', '石家庄市裕华区南二环东路20号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '15', '13866666666', '0', '0', '2016-12-12 10:44:34');
INSERT INTO `student` VALUES ('2016011105', '刘小华', '123456', '13900909091', '刘小华', '男', '2010-03-12', '双语幼儿园', '中班', '石家庄市裕华区南二环东路20号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '23', '13866666666', '1', '89', '2016-12-14 10:44:34');
INSERT INTO `student` VALUES ('2016011106', '王二小', '123', '15568839390', '王二小', '男', null, '第一幼儿园', '小班', '石家庄市裕华区南二环东路2号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '23', '13866666666', '1', '94', '2016-12-14 10:44:34');
INSERT INTO `student` VALUES ('2016011107', '李明', '123', '13345678902', '李明', '男', null, '第一幼儿园', '小班', '石家庄市裕华区南二环东路2号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '23', '13866666666', '1', '90', '2016-12-14 10:44:34');
INSERT INTO `student` VALUES ('2016011108', '李华', '123', '13445678902', '李华', '男', null, '第一幼儿园', '中班', '石家庄市裕华区南二环东路2号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '11', '13866666666', '0', '0', '2016-12-14 10:44:34');
INSERT INTO `student` VALUES ('2016011109', '刘建国', '222', '13223333322', '刘建国', '男', null, '第一幼儿园', '小班', '石家庄市裕华区南二环东路2号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '33', '13866666666', '0', '0', '2016-12-14 10:44:34');
INSERT INTO `student` VALUES ('2016011114', '李华', '1234', '13490909090', '李华', '男', '2016-11-29', '第一幼儿园', '小班', '石家庄市裕华区南二环东路20号', '/FS/Public/uploads/2016-12-12/584e5aefabdea.jpg', '20', '13866666666', '0', '0', '2016-12-14 10:44:34');

-- ----------------------------
-- Table structure for subject
-- ----------------------------
DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL COMMENT '参考类别',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `publisher` varchar(50) DEFAULT NULL COMMENT '发布人',
  `href` varchar(255) DEFAULT NULL COMMENT '课程链接',
  `publishTime` datetime DEFAULT NULL COMMENT '发布时间',
  `updateTime` datetime DEFAULT NULL COMMENT '修改时间',
  `summary` text COMMENT '课程简述',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subject
-- ----------------------------
INSERT INTO `subject` VALUES ('1', '英语印象', '英语一', '王小明', '/FS/Public/uploads/2016-12-14/5850a1143c515.swf', '2016-12-14 09:28:00', null, '英语一，学习简单的英语问候语');
INSERT INTO `subject` VALUES ('2', '英语印象', '英语二', '王小明', '/FS/Public/uploads/2016-12-14/5850a1eda3b5f.swf', '2016-12-14 09:35:00', null, '英语二，啦啦啦啦啦啦');
INSERT INTO `subject` VALUES ('3', '英语印象', '英语三', '王小明', '/FS/Public/uploads/2016-12-14/5850a20de60a8.swf', '2016-12-14 09:35:00', null, '英语三，啦啦啦啦啦拉了拉');
INSERT INTO `subject` VALUES ('4', '英语印象', '英语四', '王小明', '/FS/Public/uploads/2016-12-14/5850a231b9088.swf', '2016-12-14 09:36:00', null, '英语四，啦啦啦啦啦拉');
INSERT INTO `subject` VALUES ('5', '英语印象', '英语五', '王小明', '/FS/Public/uploads/2016-12-14/5850a25b452ea.swf', '2016-12-14 09:36:00', null, '英语五，你好，啦啦啦啦啦啦');
INSERT INTO `subject` VALUES ('6', '英语印象', '英语六', '王小明', '/FS/Public/uploads/2016-12-14/5850a28db4b21.swf', '2016-12-14 09:37:00', null, '英语六 ，，，拉啦啦啦啦啦啦');
INSERT INTO `subject` VALUES ('7', '英语印象', '英语七', '王小明', '/FS/Public/uploads/2016-12-14/5850a82e43d6a.swf', '2016-12-14 09:38:00', '2016-12-14 10:02:00', '英语7，十大拉啦啦啦啦啦啦ad');

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `realname` char(100) DEFAULT NULL,
  `subject` char(100) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL COMMENT '密码',
  `sex` varchar(100) DEFAULT NULL COMMENT '性别',
  `school` varchar(100) DEFAULT NULL COMMENT '学校',
  `grade` varchar(100) DEFAULT NULL COMMENT '学段',
  `city` varchar(100) DEFAULT NULL COMMENT '地区',
  `tel` varchar(100) DEFAULT NULL COMMENT '手机号',
  `township` varchar(100) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL COMMENT '班级号',
  `thumb` varchar(255) DEFAULT NULL COMMENT 'teacher头像',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2016011831 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('2016011820', '王小明', 'yingyu', '111', '男', '第一幼儿园', '小班', '石家庄市裕华区南二环东路20号', '13866666666', null, null, '\\FS\\Public\\uploads\\2016-12-08\\5848b5bf7a5d9.jpg');
INSERT INTO `teacher` VALUES ('2016011821', '刘小明', '语文', '222', '女', '第一幼儿园', '小班', '石家庄市裕华区南二环东路20号', '13711118987', '', null, '\\FS\\Public\\uploads\\2016-12-08\\5848b5bf7a5d9.jpg');
INSERT INTO `teacher` VALUES ('2016011822', '张小明', '数学', '333', '男', '第一幼儿园', '中班', '石家庄市裕华区南二环东路20号', '15500998899', null, null, '\\FS\\Public\\uploads\\2016-12-08\\5848b5bf7a5d9.jpg');
INSERT INTO `teacher` VALUES ('2016011827', '李小明', '英语', '111', null, '双语幼儿园', '小班', '石家庄', '1234567890', '裕华区', '1', '\\FS\\Public\\uploads\\2016-12-08\\5848b5bf7a5d9.jpg');
INSERT INTO `teacher` VALUES ('2016011828', '马小明', '语文', '111', null, '双语幼儿园', '小班', '唐山', '11111', '裕华区', '2', '\\FS\\Public\\uploads\\2016-12-08\\5848b5bf7a5d9.jpg');
INSERT INTO `teacher` VALUES ('2016011829', '赵小明', '英语', '22222', null, '双语幼儿园', '中班', '石家庄', '22', '桥西区', '1', '\\FS\\Public\\uploads\\2016-12-08\\5848b5bf7a5d9.jpg');
