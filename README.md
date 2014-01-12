CI-Helpers
==========

This is all CI helper that we need anytime in usual preojects


This is awesome helper with below features:
1. mpr():Print array result in "pre" [Thanks to Vrushank]

2. mprd(): Print array result in "pre" and exit [Thanks to Vrushank]

3. mvr(): Print array result in "pre" and exit [Thanks to Vrushank]

4. array_pluck: pluck particular element values

5. permutation_array: permutations of conditions,[Please check feasibility of your requirement.]



Version 2.0:

Change Log:

[A]File Opration Library added to perform :

writeToFile:
writeToFile($fileName,$content,$mode='a');

readFile:
readFile($fileName)

nameOfFile :
nameOfFile($directoryPath,$NeedPath=FALSE);

dirFileInfo :
dirFileInfo($directoryPath);

getFileInfo :
getFileInfo($fileName);

mimeOfFile :
mimeOfFile($fileName);

downloadFile :
downloadFile($fileName,$content);

displayDir :
displayDir($directoryPath);

delFiles :
delFiles($directoryPath,$delInnerFolders=FALSE);

[B] Added Hashpassword helper:

This is secure method to store password in database.
This has used salt and SHA1, even developer can not directly change password from database or cannot know original password.

Only owner does know this password and can be matched/encrpt/decrypt by code only.
