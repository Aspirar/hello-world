//this is main function
fn main() {
    let message = dangle();
    println!("{}", message)
}

//this is dangle function which move the ownership
fn dangle() -> String {
    let str = String::from("Hello World");
    str
}
