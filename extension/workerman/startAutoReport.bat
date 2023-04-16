@echo off 
if "%1" == "h" goto begin 
mshta vbscript:createobject("wscript.shell").run("%~nx0 h",0)(window.close)&&exit 
:begin
"D:\phpStudy\php\php-5.6.27-nts\php.exe" "D:\phpStudy\WWW\workerman_test\ws_test.php" start -d