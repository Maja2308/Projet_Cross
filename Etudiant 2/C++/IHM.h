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
__published:	// Composants g�r�s par l'EDI
private:	// D�clarations utilisateur
public:		// D�clarations utilisateur
	__fastcall TFormCross(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TFormCross *FormCross;
//---------------------------------------------------------------------------
#endif
