CI-Helpers
==========

This is all CI helper that we need anytime in usual preojects


<b>[A]Array Helpers : </b>

This is awesome helper with below features:
1. mpr():Print array result in "pre" [Thanks to Vrushank]

2. mprd(): Print array result in "pre" and exit [Thanks to Vrushank]

3. mvr(): Print array result in "pre" and exit [Thanks to Vrushank]

4. array_pluck: pluck particular element values

5. permutation_array: permutations of conditions,[Please check feasibility of your requirement.]



Version 2.0:

Change Log:

<b>[B]File Opration Library added to perform : </b>

<b><i>writeToFile:</i></b <br>
writeToFile($fileName,$content,$mode='a');

<b><i>readFile:</i></b><br>
readFile($fileName)

<b><i>nameOfFile :</i></b><br>
nameOfFile($directoryPath,$NeedPath=FALSE);

<b><i>dirFileInfo :</i></b><br>
dirFileInfo($directoryPath);

<b><i>getFileInfo :</i></b><br>
getFileInfo($fileName);

<b><i>mimeOfFile :</i></b><br>
mimeOfFile($fileName);

<b><i>downloadFile :</i></b><br>
downloadFile($fileName,$content);

<b><i>displayDir :</i></b><br>
displayDir($directoryPath);

<b><i>delFiles :</i></b><br>
delFiles($directoryPath,$delInnerFolders=FALSE);

<b>[C] Added Hashpassword helper: </b>

This is secure method to store password in database.
This has used salt and SHA1, even developer can not directly change password from database or cannot know original password.

<i>Only owner does know this password and can be matched/encrpt/decrypt by code only.</i>
