@echo off
set v_params=%*
set v_params=%v_params:\=/%
set v_params=%v_params:c:=/mnt/c%
set v_params=%v_params:"=\"%
bash.exe -c "php %v_params%"