//---------------------------------------------------------------------------

#ifndef IHMH
#define IHMH
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
//---------------------------------------------------------------------------
class TFormCross : public TForm
{
__published:	// Composants gérés par l'EDI
private:	// Déclarations utilisateur
public:		// Déclarations utilisateur
	__fastcall TFormCross(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TFormCross *FormCross;
//---------------------------------------------------------------------------
#endif
