//---------------------------------------------------------------------------

#pragma hdrstop

#include "ClassCourse.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)

ClassCourse::ClassCourse()
{
}

ClassCourse::~ClassCourse()
{

}

void ClassCourse::getIdCourse(int IdCourseChoisie)
{
	IdCourse = IdCourseChoisie;
}

void ClassCourse::getNbTours(int NbToursCourse)
{
    NbTours = NbToursCourse;
}

void ClassCourse::demarrerCourse(int IdCourse)
{
	for (int i = 0; i < NbTours; i++)
	{

	}
}

void ClassCourse::stopperCourse(int IdCourse)
{

}

void ClassCourse::ajouterDossard(NumDossard)
{
     listeDossards.push_back(NumDossard);
}

std::vector<int> ClassCourse::returnDossards()
{
    return listeDossards;
}
