//---------------------------------------------------------------------------

#ifndef ClassCourseH
#define ClassCourseH
#include <vector>
//---------------------------------------------------------------------------
class ClassCourse{
  private:
	  int IdCourse;
	  int NbTours;
	  //std::map<int, Participant*> mapIdToParticipant;
	  std::vector<int> listeDossards;
  public:
	  ClassCourse();
	  ~ClassCourse();
	  void getIdCourse(int IdCourseChoisie);
	  void getNbTours(int NbToursCourse);
	  void demarrerCourse(int IdCourse);
	  void ajouterDossard(int NumDossard);
	  void stopperCourse(int IdCourse);
	  std::vector<int> returnDossards();
};
#endif
