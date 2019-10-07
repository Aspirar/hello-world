#include<Windows.h>
#include<iostream>
//a hello world program that prints with an interval of 2.5 seconds
using namespace std;
int main(){
    cout<< " Hello \a";
	Sleep(2500);  
	cout<< " World \a";
    //this alerts the system bell
    return 0;
}
