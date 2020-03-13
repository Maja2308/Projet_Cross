//---------------------------------------------------------------------------

#ifndef detectDossardH
#define detectDossardH
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
#include <IdBaseComponent.hpp>
#include <IdComponent.hpp>
#include <IdTCPClient.hpp>
#include <IdTCPConnection.hpp>
#include <Vcl.ExtCtrls.hpp>
//---------------------------------------------------------------------------
class TPanelArche : public TForm
{
__published:	// Composants gérés par l'EDI
	TIdTCPClient *TCPArche;
	TMemo *Memo1;
	TLabel *infos;
	TLabel *labelCo;
	TPanel *Panel1;
	void __fastcall TCPArcheConnected(TObject *Sender);
private:	// Déclarations utilisateur
public:		// Déclarations utilisateur
	__fastcall TPanelArche(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TPanelArche *PanelArche;
//---------------------------------------------------------------------------
#endif
