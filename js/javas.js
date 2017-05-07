function capter_ref_qnt(ref)
{
var qnt=document.getElementById('ch_qnt_'+ref).value;

document.location="index.php?ref_pan="+ref+"&qnt_pan="+qnt;
}