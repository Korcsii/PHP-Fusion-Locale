<?php
$locale['email_create_subject'] = "�� ����� ������ �� ";
$locale['email_create_message'] = "����� [USER_NAME]�\n
�� ����� ����� ��  ".$settings['sitename']." ����� �������\n
����� ���� ������ �������� ��������� �������:\n
�����: [USER_NAME]\n
���� ����: [PASSWORD]\n\n
������ǡ\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "�� ����� ������ �� ";
$locale['email_activate_message'] = "����� [USER_NAME]�\n
�� ����� ����� �� ".$settings['sitename']." ����� �������.\n
����� ���� ������ �������� ����� ����� ���� �������� ��.\n\n
������ǡ\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "������ ������ ����� �� ".$settings['sitename'];
$locale['email_deactivate_message'] = "����� [USER_NAME]�\n
��� ������� ���� �� ��� It has been ".$settings['deactivation_period']." ���/���� ���� ����� ������� ��  ".$settings['sitename'].". ��� �� ��� ���� ���� ��� ���� ���� ������ ����� ��������� �� �����.\n
������ ����� ����ߡ ���� ����� ��� ������ ������:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
������ǡ\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "�� ����� ����� �� ".$settings['sitename'];
$locale['email_ban_message'] = "����� [USER_NAME]�\n
�� ����� ����� ��  ".$settings['sitename']." �� ��� ".$userdata['user_name']." ������� �������:\n
[REASON].\n
��� ��� ���� ������ �� ��������� �� ��� ����ѡ ���� ������� ����� ������ ��  ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "�� ��� ����� �� ".$settings['sitename'];
$locale['email_secban_message'] = "����� [USER_NAME]�\n
�� ��� ����� ��  ".$settings['sitename']." �� ��� ".$userdata['user_name']." ���� ���� ��� �������� �������� �� �� ������ ����� �� ����� ����� ������� ���� ��� ��� ������.\n
��� ��� ���� ������ �� ��������� �� ��� ����� ������ ����� ������� ����� ������ ��  ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "�� ����� ����� ��  ".$settings['sitename'];
$locale['email_suspend_message'] = "����� [USER_NAME]�\n
�� ����� ����� ��  ".$settings['sitename']." �� ��� ".$userdata['user_name']." ��� [DATE] (site time) ���� ������� ������:\n
[REASON].\n
��� ���� ������ �� ��������� �� ��� ������ݡ ���� ������� ����� ������ ��  ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>