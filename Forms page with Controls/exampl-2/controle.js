function valider()
{
mat=f.m.value;
if(mat.length!=4)
{alert("verifier votre languer de matricueler");return false;}
no=f.n.value;
pr=f.p.value;
for(i=1;i<no.length;i++)
{
if(no.charAt(i)<"A"||no.charAt(i)>"Z"&&no.charAt(i)<"a"||no.charAt(i)>"z")
{alert("verifier votre conteint de nom");return false}
}

for(i=1;i<pr.length;i++)
{
if(pr.charAt(i)<"A"||pr.charAt(i)>"Z"&&pr.charAt(i)<"a"||pr.charAt(i)>"z")
{alert("verifier votre conteint de prenom");return false}
}

}

function valider1()
{
mat=f.m.value;
if(mat.length!=4)
{alert("verifier votre languer de matricueler");return false;}
det=f.d.value;
jo=f.j.value;
if(det="")
{alert("detail n son pas vide");return false;}
n=Number(jo);
if(n>=0)
{alert("jours va etre <=0 ");return false;}


 



}
