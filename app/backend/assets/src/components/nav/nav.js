const Nav = () => {
const nav = [
    {"name":"Post types","value":"1"},
    {"name":"Options","value":"2"},    
    {"name":"Site Migration","value":"3"},    
    {"name":"User Migration","value":"4"},    
    {"name":"Tweaks","value":"5"},    
    {"name":"Css/Js","value":"6"},    
    {"name":"Shortcodes","value":"7"}    
]
return (
    <ul className="border border-gray-200 w-1/6 rounded-lg">
    {nav.map((element,index) => {
      return <li key={index} className="mb-0 py-3 px-4 hover:cursor-pointer hover:underline text-sm ">{element.name}</li>  
    })}
    </ul>
)

}

export default Nav