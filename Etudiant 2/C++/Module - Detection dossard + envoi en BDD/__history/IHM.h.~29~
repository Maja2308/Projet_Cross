//---------------------------------------------------------------------------

#ifndef IHMH
#define IHMH
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
#include "include/mysql.h"
#include "ClassCourse.h"
#include <Vcl.ExtCtrls.hpp>
#include <Windows.h>
#include <deque>
#include <vector>
#include <iostream>
#include <ctime>
#include <stdlib.h>
#include <stdio.h>
#include <time.h>
//---------------------------------------------------------------------------
class TForm1 : public TForm
{
__published:	// Composants gérés par l'EDI
	TLabel *Resultat;
	TPanel *Panel;
	TLabel *BDDPanel;
	TListBox *ListBoxNomCourse;
	TButton *ValiderCourse;
	TMemo *MemoCourseChoisie;
	TLabel *Label1;
	TListBox *ListBoxNom;
	TMemo *Memo2;
	TTimer *Timer1;
	TListBox *ListBoxDossard;
	TLabel *Label2;
	TButton *NouveauDossard;
	TLabel *LabelAssocier;
	TButton *Button1;
	void __fastcall ValiderCourseClick(TObject *Sender);
	void __fastcall Timer1Timer(TObject *Sender);
	void __fastcall NouveauDossardClick(TObject *Sender);
	void __fastcall Button1Click(TObject *Sender);
private:	// Déclarations utilisateur
	MYSQL * mySQL;
	MYSQL *conn;
	MYSQL_RES *myRES;
	MYSQL_ROW myROW;
	AnsiString NomCourse ;
	AnsiString IdCourseChoisie;
	AnsiString NomParticipantsCourse;
	AnsiString NbToursCourse;
	ClassCourse *Course;
public:		// Déclarations utilisateur
	__fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
