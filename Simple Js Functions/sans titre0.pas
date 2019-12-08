PROGRAM HelloWorld ;
USES Crt ;

var
	c, v : CHAR ;
    n : INTEGER ;
    i : INTEGER ;
	ch2 , ch : STRING ;
BEGIN
	Write('Entrez une valeur entre 1000 et 30000 :') ;
	REPEAT
		readln(n) ;
	UNTIL (n > 1000) AND (n <= 30000) ;
	Writeln ;
	ch := 'I Love You Ameni <3    ' ;
	ch2 := 'I Am Ibrahim Your Love !' ;
	Writeln('Press Enter!') ;
	Read(c) ;
	c := Readkey ;
	FOR i:=1 TO n DO
	BEGIN
		Write(ch) ;
		Write(ch2,'  ') ;
	END;
	Readln(v);
END.
