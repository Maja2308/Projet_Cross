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
	  void setIdCourse(int IdCourseChoisie);
	  void setNbTours(int NbToursCourse);
	  void demarrerCourse(int IdCourse);
	  void ajouterDossard(int NumDossard);
	  void stopperCourse(int IdCourse);
	  std::vector<int> returnDossards();
};
#endif
