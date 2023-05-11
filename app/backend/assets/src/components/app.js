import Header from "./header/header"
import Nav from "./nav/nav"

const App = () =>{
    return (
        <div className="m-4 rounded bg-white">
            <Header/>
            <div className="mt-5">
            <Nav/>
            </div>
            
        </div>
    )
}
export default App