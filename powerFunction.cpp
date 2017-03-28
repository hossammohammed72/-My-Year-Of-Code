#include <iostream>
using namespace std ; 
int power(int base , int exponent){
if(exponent==1)
return base ; 
cout << exponent << endl ; 
if(exponent%2 ==0 ){
return power(base,exponent/2)*power(base,exponent/2);}
else {

return power(base,exponent/2)*power(base,exponent/2)*base;
}
}
int main(){
int base , exponent ; 
cout <<"Welcome to my power calculating program using THE POWER OF RECURSION  just enter the base and the exponent" <<endl ; 
cin >> base >>exponent ; 
cout << power(base,exponent)<<endl; 

}
