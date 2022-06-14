:: @echo off

for /F %%I in ('dir /B') do (
		type "C:\apps\xampp\htdocs\lajmi_new\html\games\main.php" > "%%I\main.php"

)
