# AccountMemberDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memberName** | **string** | 用户姓名&lt;br&gt;真实姓名 | [optional] 
**idCardNo** | **string** | 证件号码 | [optional] 
**idCardType** | **string** | 证件类型&lt;br&gt;可选项如下:&lt;br&gt;ID:身份证 | [optional] 
**mobile** | **string** | 手机号 | [optional] 
**sex** | **string** | 性别&lt;br&gt;可选项如下:&lt;br&gt;MALE:男性&lt;br&gt;FEMALE:女性 | [optional] 
**address** | **string** | 通讯地址&lt;br&gt;长度不少于5个汉字，不超过44个汉字。地址需详细包含省（直辖市），市，区（县）及详细地址 | [optional] 
**idCardBeginDate** | **string** | 证件起始日期&lt;br&gt;类型为yyyy-MM-dd | [optional] 
**idCardEndDate** | **string** | 证件截止日期&lt;br&gt;类型为yyyy-MM-dd(如果为长期的话传长期) | [optional] 
**idCardOrg** | **string** | 身份证发证机关 | [optional] 
**corpOrationType** | **string** | 职业类别&lt;br&gt;可选项如下:&lt;br&gt;00:公务员&lt;br&gt;05:服务业从业人员&lt;br&gt;06:农、林、牧、渔生产人员&lt;br&gt;07:工人&lt;br&gt;12:家庭主妇/主夫&lt;br&gt;13:教师&lt;br&gt;14:律师&lt;br&gt;15:医护人员&lt;br&gt;17:学生&lt;br&gt;18:离退休人员&lt;br&gt;19:私营业主&lt;br&gt;20:自由职业者&lt;br&gt;19:私营业主&lt;br&gt;20:自由职业者&lt;br&gt;21:无业人员&lt;br&gt;24:群众团体、社会团队和其他成员组织人员&lt;br&gt;25:事业单位员工&lt;br&gt;26:公司员工&lt;br&gt;30:公司负责人和高管&lt;br&gt;31:事业单位负责人&lt;br&gt;32:金融、财务从业者&lt;br&gt;33:IT技术人员&lt;br&gt;35:科研人员&lt;br&gt;37:文学艺术、体育专业人员&lt;br&gt;38:其他专业技术人员&lt;br&gt;39:网商经营者 | [optional] 
**idImageFront** | **string** | 身份证正面图片地址&lt;br&gt;上传到易宝文件存储后返回的url | [optional] 
**idImageBack** | **string** | 身份证反面照地址&lt;br&gt;&lt;br&gt;上传到易宝文件存储后返回的url | [optional] 
**faceImage** | **string** | 人脸图片地址&lt;br&gt;上传到易宝文件存储后返回的url | [optional] 
**bankNo** | **string** | 绑定的一类银行卡号&lt;br&gt;&lt;a href&#x3D;\&quot;../../attachments/access?fileId&#x3D;U0BjgGgqbA\&quot;&gt;《支持的银行》&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


