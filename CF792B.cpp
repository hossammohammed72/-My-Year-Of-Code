//http://codeforces.com/problemset/problem/792/B
// still working on it 
#include <iostream>
using namespace std ; 
int main(){
int n,k ; 
cin >> n >> k ; 
int a[k],o[k]; 
int leader = 1 ;
for(int i=0;i<k;i++){
cin>>a[i]; 
while( a[i] >1 ){ 
if(leader==n){
leader = 1 ;
}
leader++;
a[i]-- ; 
}
o[i] = leader++;  
n--;}
for(int i=0;i<k;i++) 
cout << o[i] << " ";
return 0 ; 
}

