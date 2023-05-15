<?php
/**
 * ╔═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════╗
 * ║                                               Sistema de Formulário                                               ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ NOTA: Todas as informações contidas neste documento são propriedade do SENAC PERNAMBUCO e seus fornecedores,│  ║
 * ║  │ caso existam. Os conceitos intelectuais e técnicos contidos são propriedade do SENAC PERNAMBUCO e seus      │  ║
 * ║  │ fornecedores e podem estar cobertos pelas patentes nacionais, e estão protegidas por segredo comercial ou   │  ║
 * ║  │ lei de direitos autorais. Divulgação desta informação ou reprodução deste material é estritamente proibido, │  ║
 * ║  │ a menos que seja obtida permissão prévia por escrito do SENAC PERNAMBUCO.                                   │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ @description: Modelo da classe Usuario                                                                      │  ║
 * ║  │ @class: Usuario                                                                                             │  ║
 * ║  │ @dir: Model                                                                                                 │  ║
 * ║  │ @author: Tiago César da Silva Lopes                                                                         │  ║
 * ║  │ @date: 15/05/23                                                                                             │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════║
 * ║                                                     UPGRADES                                                      ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ 1. @date:                                                                                                   │  ║
 * ║  │    @description                                                                                             │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║                                                                                                                   ║
 * ╚═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════╝
 */

namespace model;

class Usuario
{
    /**
     * ╔═══════════════════════════════════════════════════════════════════════════════════════════════════════════════╗
     * ║                                                  ATTRIBUTES                                                   ║
     * ╚═══════════════════════════════════════════════════════════════════════════════════════════════════════════════╝
     */

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ Chave primária de um registro                                                                                 │
     * │ @access private                                                                                               │
     * │ @var int                                                                                                      │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */
    private int $id;

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ Nome do usuário                                                                                               │
     * │ @access private                                                                                               │
     * │ @var string                                                                                                   │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */
    private string $nome;

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ Email de acesso ao sistema                                                                                    │
     * │ @access private                                                                                               │
     * │ @var string                                                                                                   │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */
    private string $email;

    // /**
    //  * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
    //  * │ Senha de acesso ao sistema                                                                                    │
    //  * │ @access private                                                                                               │
    //  * │ @var string                                                                                                   │
    //  * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
    //  */
    // private string $senha;

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ Informação se o registro está ativo ou não. Essa informação será utilizada pelo sistema.                      │
     * │ @access private                                                                                               │
     * │ @var string                                                                                                   │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */
    private string $status;
    
    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ Date (Y-m-d H:i:s) the record was inserted into the database.                                                 │
     * │ @access private                                                                                               │
     * │ @var string                                                                                                   │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */
    private string $created;
    
    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ Date (Y-m-d H:i:s) the record was update in the database for the last time                                    │
     * │ @access private                                                                                               │
     * │ @var string                                                                                                   │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */
    private string $updated;

    /**
     * ╔═══════════════════════════════════════════════════════════════════════════════════════════════════════════════╗
     * ║                                                  CONSTRUCTOR                                                  ║
     * ╚═══════════════════════════════════════════════════════════════════════════════════════════════════════════════╝
     *
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │                                                                                                               │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */    
    function __construct()
    {
        
    }

    /**
     * ╔═══════════════════════════════════════════════════════════════════════════════════════════════════════════════╗
     * ║                                                    METHODS                                                    ║
     * ╚═══════════════════════════════════════════════════════════════════════════════════════════════════════════════╝
     */

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ @return string                                                                                                │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */ 

    public function getId()
    {
        return $this->id;
    }

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │  @param  int  $id                                                                                             │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */  
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ @return string                                                                                                │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */ 

     public function getNome()
     {
         return $this->nome;
     }
 
     /**
      * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
      * │  @param  string  $nome                                                                                        │
      * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
      */  
     public function setNome(string $nome)
     {
         $this->nome = $nome;
     }
    
     /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ @return string                                                                                                │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */ 

     public function getEmail()
     {
         return $this->email;
     }
 
     /**
      * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
      * │  @param  string  $email                                                                                       │
      * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
      */  
     public function setEmail(string $email)
     {
         $this->email = $email;
     }

     /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ @return string                                                                                                │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */ 

     public function getStatus()
     {
         return $this->status;
     }
 
     /**
      * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
      * │  @param  string  $email                                                                                       │
      * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
      */  
     public function setStatus(string $status)
     {
         $this->status = $status;
     }


    /* *
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ @return string                                                                                                │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */  
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │  @param string $created                                                                                       │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */  
    public function setCreated(string $created)
    {
        $this->created = $created;
    }

    /* *
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │ @return string                                                                                                │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */  
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * ┌───────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
     * │  @param string $updated                                                                                       │
     * └───────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
     */  
    public function setUpdated(string $updated)
    {
        $this->updated = $updated;
    }
}