###### git 应用场景   ----创建git用户
git config --local user.name '姓名'
git config --local user.email '邮箱'

###### git 应用场景   -----ssh生产公钥 
$ ssh-keygen -t rsa -C "邮箱"
一直按回车、如果要输入密码，最好输入个
继续按回车
最后有个生成秘钥的地址  

###### git 应用场景   ----创建文件夹并使用git作为版本控制
git  init                    初始化文件夹（git初始化）
git  status                  查看当前git状态

###### git 应用场景   ----提交代码到本地分支
git status                   查看git 的当前状态
git add .                    提交文件到暂存区
git commit -m '版本名称'      提交版本到本地分支

###### git 应用场景   ----比对版本中代码差异（绿色新增、红色删除）
git diff                     查看当前没有add 的内容修改；
git diff --cached            查看已经add 没有commit 的改动：
git diff HEAD                查看当前没有add和commit的改动：
git diff 版本号码1 版本号码2      查看任意两个版本之间的改动：

###### git 应用场景   ----代码回滚到上个版本
git log                          查看提交记录，即：历史版本记录 或  git log –pretty=oneline
git reset -- hard 版本串         项目回滚到项目上个版本

###### git 应用场景   ----刚刚commit的文件发现了错误（误删除），如何回滚。
方式一：						    使用场景----代码回滚到上一个版本的方法
方式二：						 	从新add并commit下问题文件
方式三：git checkout -- filename 撤销某个文件工作区的全部更改 （一定要带 --）
	
###### git 应用场景   ----下载github上的代码
git clone   github上的地址    从github上克隆代码

==###### PS：分支策略：首先master主分支应该是非常稳定的，也就是用来发布新版本，一般情况下不允许在上面干活，干活一般情况下在新建的dev分支上干活，干完后，比如上要发布，或者说dev分支代码稳定后可以合并到主分支master上来。==

###### git 应用场景   ---- 创建一个空的仓库并和本地仓库进行关联，并提交代码
创建空仓库需要在github、gitlab的个人账户上进行创建。
git remote add origin https://github.com/######/Algorithm.git  进行远程仓库关联
git push -u origin master       把本地仓库分支master的内容推送到元仓库去 （首次输入会输入远程仓库的账号密码）
第二次后就不用再使用 -u 参数了
git push origin master

###### git 应用场景   ---- 创建新的本地分支，并切换到新创建的分支，提交内容并和主分支合并。
git checkout -b fristdiv     创建分支并切换到新创建的分支
git branch                   查看当前的分支
git checkout  master         切换到master 分支
git merge   fristdiv         在master上合并fristdiv分支的代码

###### git 应用场景   ----   删除不需要的分支
git branch                   查看当前分支
git git branch –d 分支名字    删除不需要的分支

###### git 应用场景   ----   查看不同分支的异同
方式一：              从日志上查看差异
git log fristdiv ^master  		 查fristdiv有的而 master没有的
git log master..fristdiv  		 查看fristdiv中比mater多提交了那些内容
git log fristdiv...master 		 不知道谁提交的多谁提交的少，单纯想知道有什么不一样
git log --left-right dev...master在上述情况下，再显示出每个提交是在哪个分支上：
方式二：              遍历文件查（速度稍慢）
git diff branch1 branch2 --stat          显示出所有有差异的文件列表
git diff branch1 branch2 具体文件路径     显示指定文件的详细差异
git diff branch1 branch2                 显示出所有有差异的文件的详细差异 

###### git 应用场景  ---- 当前分支工作没做完，没法commit，但是一个小需求||bug来了，需要先做。将原先分支代码隐藏，等工作完后在进行恢复
git stash                        隐藏当前工作区（当前分支）
git stash list                   查看当前分支隐藏的工作区
git stash apply                  恢复当前隐藏分支
git stash drop                   删除隐藏分支

==######  多人协作：当你从远程库克隆时候，实际上Git自动把本地的master分支和远程的master分支对应起来了，并且远程库的默认名称是origin。


###### git 应用场景 ----   查看当前远程版本库信息，复制远程分支dev到本地，并建立和远程分支dev的联系
git romote        				         查看远程分支的信息
git romote -v                            查看远程分支的详细信息
git checkout –b dev origin/dev           本地创建dev分支并且和将远程分支dev内容复制过来
git branch --set-upstream dev origin/dev 本地分支dev和远程分支dev建立关联（或者说是监听）

######  git 应用场景 ----  推送分支到远程分支
git push origin master      提交master分支代码到远程仓库的远程分支（master）
git push origin dev         提交master分支代码到远程仓库的远程分支（dev）

###### git 应用场景  ----  push失败，解决冲突。先pull进行解决冲突，在进行push
git pull                    拉取关联远程分支的内容到本地。
git diff                    查看哪个文件存在冲突。
git add .                   提交修改内容
git commit -m ''            提交到本地分支
git push origin 分支名称     推送到远程分支

未完待续

