//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "IHM.h"
#include <string.h>
#include <deque>
#include <vector>
#include <sstream>
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
#define HOST "192.168.1.68"
#define USER "msv"
#define PASSWORD "msv"
#define DATABASE "Projet_Cross"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
	: TForm(Owner)
{
	mySQL = mysql_init(NULL);

	conn=mysql_real_connect(mySQL, HOST, USER, PASSWORD, DATABASE, 0, NULL, 0);
	if(conn==NULL)
	{
	}
	else
	{
		Panel->Color = clLime;
		AnsiString selectCourses = "SELECT `Nom` FROM `Course`";

	if (!mysql_query(mySQL, selectCourses.c_str()))
	{
		myRES = mysql_store_result(mySQL);
		if (myRES)
		{
			for(unsigned int i = 0; i < myRES->row_count; i++)
			{
				myROW = mysql_fetch_row(myRES);
				for(unsigned int j = 0; j < mysql_num_fields(myRES); j++)
				{
					NomCourse = myROW[j];
					ListBox1->Items->Add(NomCourse);
				}
			}
			mysql_free_result(myRES);
		}
	}
	}
}

//---------------------------------------------------------------------------


void __fastcall TForm1::ValiderCourseClick(TObject *Sender)
{
	String nomCourseChoisie = ListBox1->Items->Strings[ListBox1->ItemIndex];//on recupere le nom de la course choisie
	Memo1->Lines->Add(nomCourseChoisie);//affichage de la course choisie
	//on selectionne l'id cours een fonction de son nom.
	AnsiString selectIdCourseChoisie = "SELECT `IdCourse` FROM `Course` WHERE `Nom` = '"+nomCourseChoisie+"'";

    //envoi de la requete
	if (!mysql_query(mySQL, selectIdCourseChoisie.c_str()))
	{
		myRES = mysql_store_result(mySQL);
		if (myRES)//si il y a un resultat
		{
			for(unsigned int i = 0; i < myRES->row_count; i++)//compte le nb de resultat
			{
				myROW = mysql_fetch_row(myRES);//les lignes
				for(unsigned int j = 0; j < mysql_num_fields(myRES); j++)
				{
					IdCourseChoisie = myROW[j];
					Memo1->Lines->Add(IdCourseChoisie);//affiche l'id course dans le memo
				}
			}
			mysql_free_result(myRES);
		}
	}
	AnsiString DeleteCourseActuelle = "DELETE FROM `CourseActuelle`";
	AnsiString insertCourseActuelle = "INSERT INTO `CourseActuelle`(`IdCourse`) VALUES ('"+IdCourseChoisie+"')";
	AnsiString selectNomUtilisateur = "SELECT `Nom` FROM `Utilisateur`, `Participant`,`CourseActuelle` WHERE '"+IdCourseChoisie+"' = Participant.IdCourse AND Participant.IdUtilisateur = Utilisateur.IdUtilisateur";
	mysql_query(mySQL, DeleteCourseActuelle.c_str());
	mysql_query(mySQL, insertCourseActuelle.c_str());

	if (!mysql_query(mySQL, selectNomUtilisateur.c_str()))
	{
		myRES = mysql_store_result(mySQL);
		if (myRES)//si il y a un resultat
		{
			for(unsigned int i = 0; i < myRES->row_count; i++)//compte le nb de resultat
			{
				myROW = mysql_fetch_row(myRES);//les lignes
				for(unsigned int j = 0; j < mysql_num_fields(myRES); j++)
				{
					NomParticipantsCourse = myROW[j];
					ListBoxNom->Items->Add(NomParticipantsCourse);
				}
			}
			mysql_free_result(myRES);
		}
	}
}
//---------------------------------------------------------------------------



void __fastcall TForm1::Timer1Timer(TObject *Sender)
{
	time_t curr_time;
	curr_time = time(NULL);
	tm *tm_local = localtime(&curr_time);

	Memo2->Lines->Add("Heure locale :");
	Memo2->Lines->Add(tm_local->tm_hour);
	Memo2->Lines->Add(tm_local->tm_min);
	Memo2->Lines->Add(tm_local->tm_sec);
}
//---------------------------------------------------------------------------

