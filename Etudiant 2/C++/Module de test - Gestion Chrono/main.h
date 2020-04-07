//---------------------------------------------------------------------------

#ifndef mainH
#define mainH
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
#include <iostream>
#include <string>
#include <stdio.h>
#include <time.h>
using namespace std;
//---------------------------------------------------------------------------
class TForm1 : public TForm
{
__published:	// Composants gérés par l'EDI
	TMemo *Memo1;
	TButton *Button1;
	TMemo *Memo2;
	TButton *Button2;
	TButton *Buttontime;
	TButton *Buttontimezero;
	TButton *Buttontime1;
	TMemo *Memo3;
	void __fastcall Button1Click(TObject *Sender);
	void __fastcall Button2Click(TObject *Sender);
	void __fastcall ButtontimeClick(TObject *Sender);
	void __fastcall ButtontimezeroClick(TObject *Sender);
	void __fastcall Buttontime1Click(TObject *Sender);
private:	// Déclarations utilisateur
public:		// Déclarations utilisateur
	time_t timezero, timeun;
	__fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
