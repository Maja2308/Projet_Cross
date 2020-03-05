//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "IHM.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
	: TForm(Owner)
{
	int ResultConnexion = BDD->connectBDD();
	if (ResultConnexion == 1)
	{
	BDDPanel->Color = clLime;
	}
}
//---------------------------------------------------------------------------
void __fastcall TForm1::ValiderClick(TObject *Sender)
{
Resultat->Visible= true;
Memo1->Visible= true;
}
//---------------------------------------------------------------------------


