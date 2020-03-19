//---------------------------------------------------------------------------

#ifndef IHMH
#define IHMH
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
#include "include/mysql.h"
#include <Vcl.ExtCtrls.hpp>
#include <Windows.h>
#include <deque>
#include <vector>
#include <iostream>
#include <ctime>
//---------------------------------------------------------------------------
class TForm1 : public TForm
{
__published:	// Composants gérés par l'EDI
	TLabel *Resultat;
	TPanel *Panel;
	TLabel *BDDPanel;
	TListBox *ListBox1;
	TButton *ValiderCourse;
	TMemo *Memo1;
	TLabel *Label1;
	TListBox *ListBoxNom;
	TMemo *Memo2;
	TTimer *Timer1;
	TListBox *ListBox3;
	TLabel *Label2;
	void __fastcall ValiderCourseClick(TObject *Sender);
	void __fastcall Timer1Timer(TObject *Sender);
private:	// Déclarations utilisateur
	MYSQL * mySQL;
	MYSQL *conn;
	MYSQL_RES *myRES;
	MYSQL_ROW myROW;
	AnsiString NomCourse ;
	AnsiString IdCourseChoisie;
	AnsiString NomParticipantsCourse;
public:		// Déclarations utilisateur
	__fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
