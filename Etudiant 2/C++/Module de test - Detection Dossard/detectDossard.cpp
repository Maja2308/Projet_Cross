//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "detectDossard.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TPanelArche *PanelArche;
//---------------------------------------------------------------------------
__fastcall TPanelArche::TPanelArche(TComponent* Owner)
	: TForm(Owner)
{
}
//---------------------------------------------------------------------------

void __fastcall TPanelArche::TCPArcheConnected(TObject *Sender)
{
PanelArche->Color=clLime;
}
//---------------------------------------------------------------------------

