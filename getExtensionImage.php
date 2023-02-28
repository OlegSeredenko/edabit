/*На вход подаётся строка с именем файл, необходимо выяснить, является ли файл изображением
*/
<?php
function getExtensionImage($file)
{   
    $arr = ['png', 'gif', 'jpg'];
    $extension = new SplFileInfo($file);
    $extension = $extension->getExtension();
    if (in_array($extension, $arr)) {
        return true;
    }
    return false;
}
?>